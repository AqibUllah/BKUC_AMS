<!-- model assigment rejection -->
                      <div class="modal fade" id="view_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <p class="badge badge-maroon bg-success" style="border-radius: 20px;padding: 5px;">Assignment : </p>&nbsp;<input type="text" required style="border:none;border-radius: 20px;padding-left: 10px;width: auto;height: auto;" name="assi_name" class="bg-light" id="assignment">
                                <div class="form-group">
                                  <label>My Question</label>
                                  <textarea name="std_question" readonly id="question" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                  <label>Owner Response</label>
                                  <textarea name="message" id="response" readonly placeholder="Write here.." class="form-control"></textarea>
                                </div>
                              </div>
                              <div class="modal-footer bg-light">
                                <button type="button" class="btn btn-primary btn-float" data-dismiss="modal">Close</button>
                              </form>
                            </div>
                          </div>
                        </div>