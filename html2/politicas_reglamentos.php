<div class="main-wrapper container">

<style>


.author-archive {
padding: 1.5rem;
}

ol ,li {
list-style: none;
padding: 0;
}

h1 {
text-align: center;
margin-bottom: 2rem;
}

h1 a {
transition: all 0.1s;
}

h1 a:hover {
background: #30509d;
color: #fff;
}

input[type="radio"] {
position: absolute;
left: -9999px;
}


/* FILTERS
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.filters {
text-align: center;
margin-bottom: 2rem;
}

.filters * {
display: inline-block;
}

.filters label {
padding: 0.5rem 1rem;
margin-bottom: 0.25rem;
border-radius: 2rem;
min-width: 50px;
line-height: normal;
cursor: pointer;
transition: all 0.1s;
}

.filters label:hover {
background: #CE1530;
color: #fff;
}


/* FILTERED ELEMENTS (POSTS)
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.posts {
display: grid;
grid-gap: 1.5rem;
grid-template-columns: repeat(2, 1fr);
}

.posts .post {
background: #fafafa;
border: 1px solid rgba(0, 0, 0, 0.1);
}

.posts .post-title {
font-size: 1.3rem;
}

.posts .post-title:hover {
text-decoration: underline;
}

.posts figcaption {
padding: 1rem;
}

.posts .post-categories {
margin-bottom: 0.75rem;
font-size: 0.75rem;
}

.posts .post-categories * {
display: inline-block;
}

.posts .post-categories li {
margin-bottom: 0.2rem;
}

.posts .post-categories a {
padding: 0.2rem 0.5rem;
border-radius: 1rem;
border: 1px solid;
line-height: normal;
transition: all 0.1s;
}

.posts .post-categories a:hover {
background: #30509d;
color: #fff;
}


/* FILTERING RULES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
[value="Todas"]:checked ~ .filters [for="Todas"],
[value="comedor"]:checked ~ .filters [for="comedor"],
[value="horario"]:checked ~ .filters [for="horario"],
[value="prestaciones"]:checked ~ .filters [for="prestaciones"],
[value="dias_feriados"]:checked ~ .filters [for="dias_feriados"],
[value="vestimenta"]:checked ~ .filters [for="vestimenta"]
{
background: #30509d;
color: #fff;
}

[value="Todas"]:checked ~ .posts [data-category] {
display: block;
}

[value="comedor"]:checked ~ .posts .post:not([data-category~="comedor"]),
[value="horario"]:checked ~ .posts .post:not([data-category~="horario"]),
[value="prestaciones"]:checked ~ .posts .post:not([data-category~="prestaciones"]),
[value="dias_feriados"]:checked ~ .posts .post:not([data-category~="dias_feriados"]),
[value="vestimenta"]:checked ~ .posts .post:not([data-category~="vestimenta"]) {
display: none;
}




/* MQ
–––––––––––––––––––––––––––––––––––––––––––––––––– */
@media screen and (max-width: 900px) {
.posts {

}
}

@media screen and (max-width: 1020px) {
html {
font-size: 14px;
}

.posts {
grid-template-columns: repeat(1,100%);
}
}
</style>
<!-- Main Content -->
<div class="" style="height:0px!important;padding-top: 110px;">
  <section class="section">
    <div class="section-header" style="background-color: transparent; padding: 0px;">

    </div>
    

  </section>
</div>
<div class="main-wrapper container">
  <h1>Políticas y Reglamentos</h1>

  <section class="author-archive">
    <div class="container">
      <input type="radio" id="Todas" name="categories" value="Todas" checked>
      <input type="radio" id="comedor" name="categories" value="comedor">
      <input type="radio" id="horario" name="categories" value="horario">
      <input type="radio" id="prestaciones" name="categories" value="prestaciones">
      <input type="radio" id="dias_feriados" name="categories" value="dias_feriados">
      <input type="radio" id="vestimenta" name="categories" value="vestimenta">

      <ol class="filters">
        <li>
          <label for="Todas">Todas</label>
        </li>
        <li>
          <label for="comedor">Comedor</label>
        </li>
        <li>
          <label for="horario">Horario</label>
        </li>
        <li>
          <label for="prestaciones">Prestaciones</label>
        </li>
        <li>
          <label for="dias_feriados">Dias feriados</label>
        </li>
        <li>
          <label for="vestimenta">Vestimenta</label>
        </li>
     
      </ol>

      <ol class="posts">
        <li class="post" data-category="vestimenta">
          <article>
            <figure>
              <a href="#" target="_blank">
                <img src="/intranet/html/img/Imagenvestimenta.jpg" width="100%" class="" alt="">
              </a>
            </figure>
          </article>
        </li>
        <li class="post" data-category="dias_feriados">
          <article>
            <figure>
              <a href="#" target="_blank">
                <img src="/intranet/html/img/dias feriados.jpg" width="100%"  alt="">
              </a>
            </figure>
          </article>
        </li>
        <li class="post" data-category="prestaciones">
        
        <article>
            <figure>
              <a href="#" target="_blank">
                <img src="/intranet/html/img/prestaciones.jpg" width="100%"  alt="">
              </a>
            </figure>
          </article>
        </li>
        <li class="post" data-category="horario">
        <article>
            <figure>
              <a href="#" target="_blank">
                <img src="/intranet/html/img/Imagen horario.jpg" width="100%" alt="">
              </a>
            </figure>
          </article>
        </li>
      

        <li class="post" data-category="comedor">
        <article>
            <figure>
              <a href="#" target="_blank">
                <img src="/intranet/html/img/POLITICAS COMEDOR.jpg"  width="100%"  alt="">
              </a>
            </figure>
          </article>
        </li>
      
        
      </ol>
    </div>
  </section>
  <section>
</div>