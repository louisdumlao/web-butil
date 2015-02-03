<!-- add plant modal -->

    <div class="editPlantModal modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                {{ Form::open(array('id'=> 'editPlantModal', 'route' => 'addPlant', 'role' => 'form'))}}
                <div class="modal-header">
                    <h3 class="modal-title">Edit Plant</h3>
                </div>
                <div class="modal-body">
                    
                        <table class="plantinput">
                            <tbody>
                                <tr>
                                    <td>Plant Name:</td>
                                    <td>
                                        <input type="text" name="Plant_Name" class="form-control input-medium" placeholder="Write plant name here...">
                                    </td>
                                </tr>
                                <tr>

                                    <td>Date Placed:</td>
                                    <td>
                                        <input type="text" name="Date_Placed" class="form-control input-medium">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Plant Stage:</td>
                                    <td>
                                        <div class="dropdown">
                                            <select class="btn btn-default dropdown-toggle" name="Plant_Stage" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                              <option value="Tillering">Tillering</option>
                                              <option value="Mid-Tillering">Mid-Tillering</option>
                                              <option value="Flowering">Flowering</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Camera:</td>
                                    <td>
                                        <div class="dropdown">
                                            <select class="btn btn-default dropdown-toggle" type="button" name="Camera_ID_Side" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="true">
                                              <option value="1L">1L</option>
                                              <option value="1R">1R</option>
                                              <option value="2L">2L</option>
                                              <option value="2R">2R</option>
                                              <option value="3L">3L</option>
                                              <option value="3R">3R</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>

    <!-- end add plant modal -->

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Edit Plant</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                    <div class="col-md-12">
                        <h3>Add Plant</h3>
                        {{ Form::modal(array('url' => ' ', 'method' => 'post', 'class'=>'form-group')) }}
                            {{ Form::label('name', 'Name')}}
                            {{ Form::text('text', 'Name', null, ['class'=>'form-control']) }}
                            {{ Form::label('datePlaced', 'Date Placed') }}
                            <div>
                                <input id="date-input" type="text" type="text" class="form-control">
                            </div>
                            {{ Form::label('plantStage', 'Plant Stage')}}
                            {{ Form::input('text', 'Plant Stage', null, ['class'=>'form-control']) }}
                            {{ Form::label('comment', 'Comment')}}
                            <textarea class="form-control" rows="3" name="comment"></textarea>
                            <p>
                            {{ Form::button("Cancel", array('href'=>'', 'class'=>'btn btn-default', 'data-dismiss'=>'modal'))}}
                            {{ Form::button("Save", array('href'=>'', 'class'=>'btn btn-primary'))}}
                        {{ Form::close() }}                         
                                
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
    </div>
