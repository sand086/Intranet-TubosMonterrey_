<style>

#tree{
  width:100%;
  height:100%;
}
</style>


    <script src="assets/modules/orgChart/orgchart.js"></script>
    <br><br>
    <h1>Organigramas</h1>

    <div class="form-group">
    <form method="post" id="formulario">
      <div class="form-group">
        <select class="form-control" name="form" id="mSelect">
          <option value="0">-Seleccione-</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="11">Operaciones</option>
        </select>
        <br>
        <input type="button" id="options" value="enviar" class="btn btn-danger" disabled/>
      </div>
    </form>

    </div>
    <div id="tree"/></div>
