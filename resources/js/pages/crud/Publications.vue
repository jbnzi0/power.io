<template>
    <div class="container">
        <Upbar></Upbar>
        <Navbar></Navbar>
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                            <h3 class="card-title">Publications List</h3>

                            <div class="card-tools">
                                <button class="btn btn-primary" @click="newModal">Add New <i class="fas fa-plus fa-fw"> </i></button>
                            </div>
                    </div>
                    
                    <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Content</th>
                                <th>Creation Date</th>
                                <th>Updated At</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="publication in publications" :key="publication.id">
                        
                                <td>{{ publication.id }}</td>
                                <td>{{ publication.title }}</td>
                                <td>{{ publication.type }}</td>
                                <td style="display:block;text-overflow: ellipsis;width: 200px;overflow: hidden; white-space: nowrap;">{{ publication.content }}</td>
                                <td>{{ new Date(publication.created_at).toDateString() }}</td>
                                <td>{{ new Date(publication.updated_at).toDateString() }}</td>
                                <td>
                                    <a href="#">
                                        <i class="fa fa-edit" @click="editModal(publication)"></i>
                                    </a>
                                    
                                    <a href="#" @click="deletePublication(publication.id)"> 
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
                        <h5 v-show="editMode" class="modal-title" id="addNewLongTitle">Edit Publication</h5>
                        <h5 v-show="!editMode" class="modal-title" id="addNewLongTitle">Add Publication</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form @submit.prevent="editMode ? editPublication() : savePublication()">

                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" v-model="form.title" name="title" placeholder="Title"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('title')}">
                                <has-error :form="form" field="title"></has-error>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" v-model="form.type" name="type" placeholder="Type"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('type')}">
                                <has-error :form="form" field="type"></has-error>
                            </div>

                            <div class="form-group">
                            <textarea name="content" cols="40" rows="5" v-model="form.content" placeholder="Write here..."
                                class="form-control" :class="{ 'is-invalid': form.errors.has('content')}" />

                            <has-error :form="form" field="content"></has-error>
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
    import Navbar from '../../components/Navbar.vue'
    import Upbar from '../../components/UpBar.vue'

    export default {
        components:{
            Navbar,
            Upbar
        },
        data(){
            return {
                editMode: false,
                publications: {},
                form: new Form({
                    id:'',
                    title: '',
                    type: '',
                    content: '',

                })
            }
        },
        methods: {
            editModal(publication){
                this.editMode = true
                this.form.reset()
                $('#addNew').modal('show')
                this.form.fill(publication)
                
                
            },
            newModal(){
                this.editMode = false
                this.form.reset()
                $('#addNew').modal('show')
            },
            editPublication(){
               this.form.put(`api/publications/ ${this.form.id}`)
               .then(() => {
                      $('#addNew').modal('hide')
                      Swal.fire('Edited!', 'Publication edited', 'success')
                      Fire.$emit('publication-created')
               })
               .catch(()=> {
                    Fire.$emit('publication-created')
                    Swal.fire("Failed!", "Something went wrong", "warning")
               }) 
                
            },
            deletePublication(id){
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
                            this.form.delete('api/publications/'+id).then(() =>{
                                    Swal.fire('Removed!', 'This publication has been removed!', 'success')
                                    Fire.$emit('publication-created')
                            }).catch(() => {
                                Fire.$emit('publication-created')
                                Swal.fire("Failed!", "Something went wrong", "warning")
                                
                            })
                        }
                    })
            },
            savePublication(){
                this.form.post('api/publications')
                Fire.$emit('publication-created')
                Toast.fire({ icon: 'success', title: 'Publication Created succesfully' })
                $('#addNew').modal('hide')
            },
            getPublications(){
                axios.get('api/publications').then(({ data }) => (this.publications = data.data ))
            }
        },
        created(){
            this.getPublications();
            Fire.$on('publication-created', () => {
                this.getPublications();
            });
        }
    }
</script>
