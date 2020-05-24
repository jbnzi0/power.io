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
                                <th>Date</th>
                                <th>Status</th>
                                <th>Email</th>
                                <th>
                                    
                                </th>
                                <th>
                                    d</th>
                                <th>Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>183</td>
                                <td>John Doe</td>
                                <td>11-7-2017</td>
                                <td>Student</td>
                                <td>jdoe@gmail.com</td>
                                <td>Admin</td>
                                <td>Neurosciences</td>
                                <td>
                                    <a href="#">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    
                                    <a href="#"> 
                                        <i class="fa fa-trash red"></i> <!-- Change the color later -->
                                    </a>
                                </td>
                                </tr>

                            </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
        
        
        <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add New Researcher</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
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
                            <option value="author">Author</option>
                        </select>
                        <has-error :form="form" field="type"></has-error>
                </div>


                <div class="form-group">
                <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" v-model="form.status" name="status" class="form-control custom-control-input" :class="{ 'is-invalid': form.errors.has('status')}" id="customRadioInline1">
                <label class="custom-control-label" for="customRadioInline1">Student</label>
                </div>

                 <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" v-model="form.status" name="status" class="form-control custom-control-input" :class="{ 'is-invalid': form.errors.has('status')}" id="customRadioInline2">
                <label class="custom-control-label" for="customRadioInline2">Professor</label>
                </div>
                <has-error :form="form" field="status"></has-error>
                </div>
        
                

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Create</button>
            </div>
            </div>
        </div>
    </div>

    </div>


</template>

<script>
    export default {
        data(){
            return {
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
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
