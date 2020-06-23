<template>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Researchers List</h3>

                            <div class="card-tools">
                                <button class="btn btn-primary" @click="newModal">Add New <i class="fas fa-user-plus fa-fw"> </i></button>
                            </div>
                        </div>
                        
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Email</th>
                                <th>Type</th>
                                <th>Field</th>
                                <th>Registration Date</th>
                                <th>Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="user in users" :key="user.id">
                        
                                <td>{{ user.id }}</td>
                                <td>{{ user.name }}</td>
                                <td>{{ user.status }}</td>
                                <td>{{ user.email }}</td>
                                <td>{{ user.type }}</td>
                                <td>{{ user.field }}</td>
                                <td>{{ new Date(user.created_at).toDateString() }}</td>
                                <td>
                                    <a href="#">
                                        <i class="fa fa-edit" @click="editModal(user)"></i>
                                    </a>
                                    
                                    <a href="#" @click="deleteUser(user.id)"> 
                                        <i class="fa fa-trash"></i> <!-- Change the color later -->
                                    </a>
                                </td>
                                </tr>

                            </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
        
        
        <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNew" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 v-show="editMode" class="modal-title" id="addNewLongTitle">Edit Researcher</h5>
                <h5 v-show="!editMode" class="modal-title" id="addNewLongTitle">Add New Researcher</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form @submit.prevent="editMode ? editUser() : saveUser()">

                <div class="modal-body">
                    <div class="form-group">
                    <input type="text" v-model="form.name" name="name" placeholder="Name"
                        class="form-control" :class="{ 'is-invalid': form.errors.has('name')}">
                    <has-error :form="form" field="name"></has-error>
                    </div>
                    
                    <div class="form-group">
                    <input type="text" v-model="form.email" name="email" placeholder="Email"
                        class="form-control" :class="{ 'is-invalid': form.errors.has('email')}">
                    <has-error :form="form" field="email"></has-error>
                    </div>

                    <div class="form-group">
                    <input type="password" v-model="form.password" name="password" placeholder="***********"
                        class="form-control" :class="{ 'is-invalid': form.errors.has('password')}">

                    <has-error :form="form" field="password"></has-error>
                    </div>

                    <div class="form-group">
                    <input type="text" v-model="form.field" name="field" placeholder="Field"
                        class="form-control" :class="{ 'is-invalid': form.errors.has('field')}">
                    <has-error :form="form" field="field"></has-error>
                    </div>

                    <div class="form-group">
                            <select name="type" v-model="form.type" id="type" class="form-control" :class="{ 'is-invalid': form.errors.has('type') }">
                                <option value="">Attribute Privileges</option>
                                <option value="Admin">Admin</option>
                                <option value="User">Standard User</option>
                            </select>
                            <has-error :form="form" field="type"></has-error>
                    </div>


                     <div class="form-group">
                            <select name="status" v-model="form.status" id="status" class="form-control" :class="{ 'is-invalid': form.errors.has('status') }">
                                <option value="">Select </option>
                                <option value="Professor">Professor</option>
                                <option value="Student">Student</option>
                                <option value="Alumni">Alumni</option>
                            </select>
                            <has-error :form="form" field="status"></has-error>
                    </div>
            
                    

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button v-show="editMode" type="submit" class="btn btn-success">Update</button>
                    <button v-show="!editMode" type="submit" class="btn btn-success">Create</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    </div>


</template>

<script>
    export default {
        data(){
            return {
                editMode: false,
                users: {},
                form: new Form({
                    id:'',
                    name : '',
                    email: '',
                    password: '',
                    status: '',
                    type: '',
                    field: ''

                })
            }
        },
        methods: {
            editModal(user){
                this.editMode = true
                this.form.reset()
                $('#addNew').modal('show')
                this.form.fill(user)
            },
            newModal(){
                this.editMode = false
                this.form.reset()
                $('#addNew').modal('show')
            },
            editUser(){
               this.form.put('api/user/'+this.form.id)
               .then(() => {
                      $('#addNew').modal('hide')
                      Swal.fire('Edited!', 'User\'s informations edited', 'success')
                      Fire.$emit('user-created')
               })
               .catch(()=> {
                    Fire.$emit('user-created')
                    Swal.fire("Failed!", "Something went wrong", "warning")
               }) 
                
            },
            deleteUser(id){
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if(result.value){
                            this.form.delete('api/user/'+id).then(() =>{
                                    Swal.fire('Removed!', 'This user has been removed!', 'success')
                                    Fire.$emit('user-created')
                            }).catch(() => {
                                Fire.$emit('user-created')
                                Swal.fire("Failed!", "Something went wrong", "warning")
                                
                            })
                        }
                    })
            },
            saveUser(){
                this.form.post('api/user')
                Fire.$emit('user-created')
                Toast.fire({ icon: 'success', title: 'Researcher Created succesfully' })
                $('#addNew').modal('hide')
            },
            getUsers(){
                axios.get('api/user').then(({ data }) => (this.users = data.data ))
            }
        },
        created(){
            this.getUsers();
            Fire.$on('user-created', () => {
                this.getUsers();
            });
        }
    }
</script>
