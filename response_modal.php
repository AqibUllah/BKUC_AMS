<!-- model assigment rejection -->
                      <div class="modal fade" id="response_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <form method="post">
                              <div class="modal-header bg-primary">
                                <p class="modal-title" id="exampleModalLabel">Response</p>
                                <button type="button" class="close btn-danger" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              
                              <div class="modal-body">
                                <input type="hidden" name="ass_id" id="ass_id">
                                <input type="hidden" name="ques_id" id="ques_id">
                                <input type="hidden" name="std_name" id="student_name">
                                <input type="hidden" name="std_email" id="std_email">
                                <p class="badge badge-maroon bg-success" style="border-radius: 20px;padding: 5px;">Assignment : </p>&nbsp;<input type="text" required style="border:none;border-radius: 20px;padding-left: 10px;width: auto;height: auto;" name="assi_name" class="bg-light" id="ass_name">
                                <div class="form-group">
                                  <label>Student Question</label>
                                  <textarea name="std_question" readonly id="std_question" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                  <label>Response</label>
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