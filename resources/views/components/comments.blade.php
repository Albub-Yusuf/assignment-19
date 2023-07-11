<div class="container">
         <span id="post_id" data-id="{{ $postId }}"></span>

        <div class="row justify-content-center" style="min-height: 75vh;">
            <div class=" col-lg-9 mb-5 mb-lg-0">
                <section>
                          
                <!-- components goes here -->

                            <div class="col-lg-12 col-md-12">
                            <div class="mb-5 border-top mt-4 pt-5">
                                <h3 class="mb-4">Comments</h3>

                                <div id="comments-container">

                                    


                                </div>

                               
                                
                            </div>

                            <div id="reply-container">
                                <h3 class="mb-4">Leave a Reply</h3>
                                <form method="POST">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <textarea class="form-control shadow-none" name="comment" rows="7" required></textarea>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input class="form-control shadow-none" type="text" placeholder="Name" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input class="form-control shadow-none" type="email" placeholder="Email" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input class="form-control shadow-none" type="url" placeholder="Website">
                                            <p class="font-weight-bold valid-feedback">OK! You can skip this field.</p>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Comment Now</button>
                                </form>
                            </div>
                        </div>
                <!--  ends -->


                </section>
            </div>
        </div>
    </div>



    <script>

    var element = document.getElementById('post_id');
    var id = element.dataset.id;

        GetComments(id);
        async function GetComments(id){

            let URL = "/post/"+id;
            console.log(URL);
            
            try{
                let response = await axios.get(URL);
               
                response.data.comment.forEach((comment)=>{
                    
                    document.getElementById('comments-container').innerHTML+=(

                        `
                                        <div class="media d-block d-sm-flex mb-4 pb-4">
                                        <a class="d-inline-block mr-2 mb-3 mb-md-0" href="#">
                                            <img src='${comment.user['img']}' class="mr-3 rounded" alt="" width="150px">
                                        </a>
                                        <div class="media-body">
                                            <a href="#!" class="h4 d-inline-block mb-3">${comment.user['name']}</a>

                                            <p>${comment['comment']}</p>
                                            
                                            <span class="text-black-800 mr-3 font-weight-600">${comment['created_at']}</span>
                                            
                                        </div>
                         </div>
                        `

                    );

                });

            }catch(error){
                alert(error)
            }



        }
    </script>
