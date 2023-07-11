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

    
                        <div id="commentForm">
                                <h3 class="mb-4">Leave a Comment as a Guest</h3>
                                <form method="POST" action="">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <textarea id="comment" name="comment" class="form-control shadow-none" rows="7" required></textarea>
                                        </div>
                                       <input id="postId" type="hidden" value="{{$postId}}" name="post_id"/>
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

        // reply post
            let commentForm = document.getElementById('commentForm');
            commentForm.addEventListener('submit', async (event)=>{
                event.preventDefault();
                let comment = document.getElementById('comment').value;

                let postId = document.getElementById('postId').value;
               
                let formData={
                    'user_id':11,
                    'post_id':postId,
                    'comment':comment
                }

                let submittedUrl = "/comment";

                let res = await axios.post(submittedUrl,formData)

                if(res.status===200){
                    GetLatestComment(postId)
                    
                }else{
                    alert('something went wrong')
                }

            }) 
        // reply post ends here









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


        // get latest comment by post

        async function GetLatestComment(id){

let URL = "/post/"+id;
console.log(URL);

try{
    let response = await axios.get(URL);
   
    response.data.latestCommentByPost.forEach((comment)=>{
        
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
