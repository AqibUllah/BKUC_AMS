<!-- model assigment rejection -->
                      <div class="modal fade" id="question_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <form method="post">
                              <div class="modal-header bg-danger">
                                <p class="modal-title" id="exampleModalLabel">Assignment Confustion</p>
                                <button type="button" class="close btn-danger" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              
                              <div class="modal-body">
                                <input type="hidden" name="ass_id" id="ass_id">
                                <p class="badge badge-maroon bg-maroon" style="border-radius: 20px;padding: 5px;">Assignment : </p>&nbsp;<input type="text" required style="border:none;border-radius: 20px;padding-left: 10px;width: auto;height: auto;" name="assi_name" class="bg-danger" id="ass_name">
                                <div class="form-group">
                                  <textarea name="message" placeholder="Write here.." class="form-control"></textarea>
                                </div>
                              </div>
                              <div class="modal-footer bg-light">
                                <button type="button" class="btn btn-danger btn-float" data-dismiss="modal">Close</button>

                                <!-- <input type="submit" name="btn_reject_done" value="Reject Assignment" class="btn btn-danger btn-float btn-block"> -->
                                <!-- <input type="submit" name="send" class="btn btn-primary btn-float btn-block" value="Send"> -->
                                <button type="submit" name="send" class="btn btn-primary btn-float btn-block">Send</button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>