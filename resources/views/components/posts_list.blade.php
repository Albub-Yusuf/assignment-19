<div class="container" style="min-height: 55vh;">
      <div class="row justify-content-center">
        <div class="col-lg-12 mb-5 mb-lg-0 mt-5">
            <h2 class="h5 section-title">Featured Post</h2>
              
            <div id="posts-container">

            </div>
           

       

         </div>
      </div>
     
    </div>

    <script>
        GetPosts();
        async function GetPosts(){

            let URL = "/posts";
            
            try{
                let response = await axios.get(URL);
                response.data.forEach((post)=>{
                    
                    document.getElementById('posts-container').innerHTML+=(

                        `<article class="card mb-4">
                <div class="row card-body">
                  <div class="col-md-4 mb-4 mb-md-0">
                    <div class="post-slider slider-sm">
                      <img src='${post['banner_img']}' class="card-img" alt="post-thumb" style="height:200px; object-fit: cover;">
                    </div>
                  </div>
                  <div class="col-md-8">
                    <h3 class="h4 mb-3"><a class="post-title" href="#">${post['title']}</a></h3>
                    <ul class="card-meta list-inline">
                      <li class="list-inline-item">
                        <a href="#" class="card-meta-author">
                          <img src='${post.user['img']}' alt="image">
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
                    <p>${ post['content'].substring(0, 200) + "..." }</p>

                    <a href="/post-details/${post['id']}" class="btn btn-outline-primary">Read More</a>
                  </div>
                </div>
              </article>`

                    );

                });

            }catch(error){
                alert(error)
            }



        }
    </script>