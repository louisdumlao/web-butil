<div class="editPlantModal modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Edit Plant</h3>
                </div>
                <div class="modal-body">
                    <form id="editPlantModal" method="POST">
                        <table class="plantinput">
                            <tbody>
                                <tr>
                                    <td>Plant Name:</td>
                                    <td>
                                        <input type="text" id="" class="form-control input-medium" placeholder="Write plant name here...">
                                    </td>
                                </tr>
                                <tr>

                                    <td>Date Placed:</td>
                                    <td>
                                        <input type="text" id="" class="form-control input-medium">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Plant Stage:</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                Tillering
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Tillering</a>
                                                </li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mid-Tillering</a>
                                                </li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Flowering</a>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Camera:</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                Select Camera
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">1L</a>
                                                </li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">1R</a>
                                                </li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2L</a>
                                                </li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2R</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
    </div>