<script src="/Intranet-TubosMonterrey/html2/assets/modules/OrgChart.js"></script>
<style>

#tree{
  width:100%;
  height:100%;
}
</style>

<!-- <div class="card mb-3"  style="width:230px;padding: 6px 10px 6px 10px;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="assets/img/avatar/avatar-1.png" width="70" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body p-0" style="font-size: small;">
                      <p class="mb-2" style="font-size: small;line-height: 1.4;"> Miguel Angel Jimenez</p>
                      <span class=""  style="margin: auto; color:#0A84FF">Director de almacen</span>
                    </div>
                  </div>
                </div>
              </div> -->
              <script src="https://balkan.app/js/OrgChart.js"></script>
<div id="tree"/></div>

              <script>


var chart = new OrgChart(document.getElementById("tree"), {
    mouseScrool: OrgChart.action.none,
    menu: {
            pdf: { text: "Export PDF" },
            png: { text: "Export PNG" },
            svg: { text: "Export SVG" },
            csv: { text: "Export CSV" },
            json: { text: "Export JSON" }
        },
    enableSearch: false,
    nodeBinding: {
        field_0: "name",
        img_0 : "photo1" , 
        field_1: "title",
    },
    template:"ula",
    enableDragDrop: true,
    nodes: [
      { id: 1, name: "Denny Curtis", title: "CEO", photo1: "https://cdn.balkan.app/shared/1.jpg"},
    { id: 2, pid: 1, name: "Ashley Barnett", title: "Denny Curtis", photo1: "https://cdn.balkan.app/shared/4.jpg" },
    { id: 3, pid: 1, name: "Caden Ellison", title: "Denny Curtis", photo1: "https://cdn.balkan.app/shared/4.jpg" },
    { id: 4, pid: 1, ppid: 3, name:"Mauricio Rocha"},

    ]
});


              </script>