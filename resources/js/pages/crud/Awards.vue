<template>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                            <h3 class="card-title">Awards List</h3>

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
                                <th>Sponsor</th>
                                <th>Notes</th>
                                <th>Winners</th>
                                <th>Reception Date</th>
                                <th>Updated At</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="award in awards" :key="award.id">
                        
                                <td>{{ award.id }}</td>
                                <td>{{ award.title }}</td>
                                <td>{{ award.type }}</td>
                                <td>{{ award.sponsor }}</td>
                                <td style="display:block;text-overflow: ellipsis;width: 200px;overflow: hidden; white-space: nowrap;">{{ award.notes }}</td>
                                <td>Fred Lavega</td> <!-- will be the winners -->
                                <td>{{ new Date(award.created_at).toDateString() }}</td>
                                <td>{{ new Date(award.updated_at).toDateString() }}</td>
                                <td>
                                    <a href="#">
                                        <i class="fa fa-edit" @click="editModal(award)"></i>
                                    </a>
                                    
                                    <a href="#" @click="deleteAward(award.id)"> 
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
                        <h5 v-show="editMode" class="modal-title" id="addNewLongTitle">Edit Award</h5>
                        <h5 v-show="!editMode" class="modal-title" id="addNewLongTitle">Add Award</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form @submit.prevent="editMode ? editAward() : saveAward()">

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
                                <input type="text" v-model="form.sponsor" name="sponsor" placeholder="Sponsor"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('sponsor')}">
                                <has-error :form="form" field="sponsor"></has-error>
                            </div>

                            <div class="form-group">
                                <input type="text" v-model="form.notes" name="notes" placeholder="Notes"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('notes')}">
                                <has-error :form="form" field="notes"></has-error>
                            </div>

                            <div class="form-group">
                                <input readonly="readonly" type="text" v-model="form.winners" name="winners" placeholder="Winners"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('winners')}">
                                <has-error :form="form" field="winners"></has-error>
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
                awards: {},
                form: new Form({
                    id:'',
                    title: '',
                    type: '',
                    sponsor:'',
                    notes: ''

                })
            }
        },
        methods: {
            editModal(award){
                this.editMode = true
                this.form.reset()
                $('#addNew').modal('show')
                this.form.fill(award)
                
                
            },
            newModal(){
                this.editMode = false
                this.form.reset()
                $('#addNew').modal('show')
            },
            editAward(){
               this.form.put(`api/awards/ ${this.form.id}`)
               .then(() => {
                      $('#addNew').modal('hide')
                      Swal.fire('Edited!', 'Award edited', 'success')
                      Fire.$emit('award-created')
               })
               .catch(()=> {
                    Fire.$emit('award-created')
                    Swal.fire("Failed!", "Something went wrong", "warning")
               }) 
                
            },
            deleteAward(id){
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
                            this.form.delete('api/awards/'+id).then(() =>{
                                    Swal.fire('Removed!', 'This award has been removed!', 'success')
                                    Fire.$emit('award-created')
                            }).catch(() => {
                                Fire.$emit('award-created')
                                Swal.fire("Failed!", "Something went wrong", "warning")
                                
                            })
                        }
                    })
            },
            saveAward(){
                this.form.post('api/awards')
                Fire.$emit('award-created')
                Toast.fire({ icon: 'success', title: 'Award Created succesfully' })
                $('#addNew').modal('hide')
            },
            getAwards(){
                axios.get('api/awards').then(({ data }) => (this.awards = data.data ))
            }
        },
        created(){
            this.getAwards();
            Fire.$on('award-created', () => {
                this.getAwards();
            });
        }
    }
</script>
