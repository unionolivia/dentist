<!-- START CONTENT -->
<section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
             <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Category(Information)</h5>
                <ol class="breadcrumbs">
                    <li><a href="http://127.0.0.1/dentist/tips">All categories</a>
                  </li>
                  <li class="active">categories</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
    
    <!--start container-->
    <div class="container">

        <table id="data-table-simple" class="display table table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>S/N</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Date Added</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <!-- Do not insert thead tag here. Javascript will take care of it. -->
            <tfoot>
                <tr>
                    <th>S/N</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Date Added</th>
                    <th>Actions</th>
                </tr>
            </tfoot>
        </table>


        <div id="modals" class="modal">
            <span class="loading right-align"></span>
            <div class="modal-content">
                <h4 class="user-name">Add Category</h4>
                <div class="col s12 m8 l9">
                    <div class="row">
                        <form class="col s12" id="forms">
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="mdi-action-question-answer prefix"></i>
                                    <input name="name" id="name" type="text" class="validate">
                                    <label for="name">Question</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="mdi-action-spellcheck prefix"></i>
                                    <textarea name="description" id="description" class="materialize-textarea"></textarea>
                                    <label for="description" class="">Describe in few words.</label>
                                </div>
                                
                                <div class="file-field input-field col s6">
                      <div class="btn">
                        <span>File</span>
                        <input type="file" name="file" id="file">
                      </div>
                      <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                      </div>
                    </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s2">
                                    <button class="add-details btn waves-effect waves-light" type="submit">add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <!-- Floating Action Button -->
        <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
            <a class="add btn-floating btn-large" href="">
                <i class="mdi-content-add"></i>
            </a>
        </div>
        <!-- Floating Action Button -->

    </div>
    <!--end container-->
</section>
<!-- END CONTENT -->
