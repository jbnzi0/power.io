<template>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Researchers List</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNew">Add New <i class="fas fa-user-plus fa-fw"> </i></button>
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
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    
                                    <a href="#"> 
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
        
        
        <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNewCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNewLongTitle">Add New Researcher</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form @submit.prevent="saveUser">

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
                                <option value="admin">Admin</option>
                                <option value="user">Standard User</option>
                            </select>
                            <has-error :form="form" field="type"></has-error>
                    </div>


                     <div class="form-group">
                            <select name="status" v-model="form.status" id="status" class="form-control" :class="{ 'is-invalid': form.errors.has('status') }">
                                <option value="">Select </option>
                                <option value="admin">Professor</option>
                                <option value="student">Student</option>
                                <option value="alumni">Alumni</option>
                            </select>
                            <has-error :form="form" field="status"></has-error>
                    </div>
            
                    

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Create</button>
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
                users: {},
                form: new Form({
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
            saveUser(){
                this.form.post('api/user')
                Fire.$emit('user-created')
                //$('#addNew').modal('hide')
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
            //setInterval(() => this.getUsers(), 3000);
        }
    }
</script>
