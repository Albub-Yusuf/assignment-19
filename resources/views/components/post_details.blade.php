         <div class="container">
         <span id="post_id" data-id="{{ $postId }} hidden"></span>

        <div class="row justify-content-center" style="min-height: 75vh;">
            <div class=" col-lg-9 mb-5 mb-lg-0">
                <section id="post-container">
                                          
                </section>
            </div>
        </div>
    </div>


    <script>

    var element = document.getElementById('post_id');
    var id = element.dataset.id;
    console.log(id);

        GetPostDetails(id);
        async function GetPostDetails(id){

            let URL = "/post/"+id;
            
            try{
                let response = await axios.get(URL);
                response.data.forEach((post)=>{
                    
                    document.getElementById('post-container').innerHTML+=(

                        `
                        <article>
                            <div class="post-slider mb-4">
                                <img src='${post['banner_img']}' class="card-img" alt="post-thumb">
                            </div>
                            
                            <h1 class="h2">${post['title']} </h1>
                            <ul class="card-meta my-3 list-inline">
                                <li class="list-inline-item">
                                <a href="#" class="card-meta-author">
                                    <img src='${post.user['img']}'>
                                    <span>${post.user['name']}</span>
                                </a>
                                </li>
                                <li class="list-inline-item">
                                <i class="ti-calendar"></i>${post['created_at']}
                                </li>
                                <li class="list-inline-item">
                                <ul class="card-meta-tag list-inline">
                                    <li class="list-inline-item"><a href="#">${post.category['name']}</a></li>
                                </ul>
                                </li>
                            </ul>
                            <div class="content"><p>${ post['content']}</p>
                            </div>
                        </article>
                        `

                    );

                });

            }catch(error){
                alert(error)
            }



        }
    </script>