<style>
  /* post card styles */
  .card-news{
  border: none;
  transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
  overflow:hidden;
  border-radius:20px;
  min-height:450px;
  box-shadow: 0 0 12px 0 ;
  }
  @media (max-width: 768px) {
  .card-news{
  min-height:"350px";
  }
  }
  @media (max-width: 420px) {
  .card-news{
  min-height:"300px";
  }
  }
  .card-has-bg{
  transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
  background-size:120%;
  background-repeat:no-repeat;
  background-position: center center;
  }
  .card-has-bg::before {
  content: '';
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: inherit;
  /* -webkit-filter: grayscale(1); */
  -moz-filter: grayscale(100%);
  -ms-filter: grayscale(100%);
  -o-filter: grayscale(100%);
  /* filter: grayscale(100%); */
  }
  .card-has-bg:hover {
  transform: scale(0.98);
  box-shadow: 0 0 5px -2px rgba(0,0,0,0.3);
  background-size:130%;
  transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
  }
  .card-img-overlay {
  transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
  /* background: rgb(35,79,109);
  background: linear-gradient(0deg, rgba(4,69,114,0.5) 0%, rgba(4,69,114,1) 100%); */
  }
  .card-footer{
  background: none;
  border-top: none;}
  .media img{
  border:solid 3px rgba(255,255,255,0.3);
  }
  .card-meta{color:#26BD75}
  .card-body{ 
  transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
  }
  .card-body:hover {
  cursor: pointer;
  transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
  }
  .card-body{
  margin-top:30px;
  transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
  }
  .card-img-overlay {
  transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
  /* background: rgba(35, 79, 109, 0.274);
  background: linear-gradient(0deg, rgba(35, 79, 109, 0.24) 0%, rgba(69, 95, 113, 0.527) 100%); */
  }
  @media (max-width: 767px){
  }
</style>
<div class="main-content">
  <section class="section">
    <h1>Noticias</h1>
    <div class="section-body">
      <div class="row">
        <div class="owl-carousel owl-theme slider" id="slider_news">
          <div>
            <div class="card card-news text-white card-has-bg click-col">
              <div class="card-img-overlay d-flex flex-column" style="padding-top: 0px;padding-left: 0px;padding-right: 0px;">
                <img class="card-img" src="assets/img/news/noticia1.webp" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?" style="height: 250;">
              </div>
              <div class="card-img-overlay d-flex flex-column">
                <div class="card-body" style="margin-top: 230px;color: black;">
                  <small class="card-meta mb-2">el economista</small>
                  <h4 class="card-title mt-0 "><a  herf="#">Acereras sufrirán atonía económica global en el 2020</a></h4>
                  <small><i class="far fa-clock"></i> Octubre 15, 2019</small>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="card card-news text-white card-has-bg click-col">
              <div class="card-img-overlay d-flex flex-column" style="padding-top: 0px;padding-left: 0px;padding-right: 0px;">
                <img class="card-img" src="assets/img/news/noticia2.webp" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?" style="height: 250;">
              </div>
              <div class="card-img-overlay d-flex flex-column">
                <div class="card-body" style="margin-top: 230px;color: black;">
                  <small class="card-meta mb-2">Milenio</small>
                  <h4 class="card-title mt-0 "><a  herf="#">Por coronavirus, economía mexicana caerá 3.7% en 2020: Moody's</a></h4>
                  <small><i class="far fa-clock"></i> Marzo 25, 2020</small>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="card card-news text-white card-has-bg click-col">
              <div class="card-img-overlay d-flex flex-column" style="padding-top: 0px;padding-left: 0px;padding-right: 0px;">
                <img class="card-img" src="assets/img/news/noticia3.webp" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?" style="height: 250;">
              </div>
              <div class="card-img-overlay d-flex flex-column">
                <div class="card-body" style="margin-top: 230px;color: black;">
                  <small class="card-meta mb-2">El economista</small>
                  <h4 class="card-title mt-0 "><a  herf="#">EU elimina cuotas a estructuras de acero provenientes de México</a></h4>
                  <small><i class="far fa-clock"></i>Febrero 27, 2020</small>
                </div>
              </div>
            </div>
          </div>
          <!-- <div >
            <div class="card card-news text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?computer,design');">
              <img class="card-img d-none" src="https://source.unsplash.com/600x900/?computer,design" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
              <div class="card-img-overlay d-flex flex-column">
                <div class="card-body">
                  <small class="card-meta mb-2">Thought Leadership</small>
                  <h4 class="card-title mt-0 "><a class="text-white" herf="#">Goverment Lorem Ipsum Sit Amet Consectetur dipisi?</a></h4>
                  <small><i class="far fa-clock"></i> October 15, 2020</small>
                </div>
                <div class="card-footer">
                  <div class="media">
                    <img class="mr-3 rounded-circle" src="https://assets.codepen.io/460692/internal/avatars/users/default.png" alt="Generic placeholder image" style="max-width:50px">
                    <div class="media-body">
                      <h6 class="my-0 text-white d-block">Oz Coruhlu</h6>
                      <small>Director of UI/UX</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div> -->
        </div>
      </div>
    </div>
  </section>
</div>
