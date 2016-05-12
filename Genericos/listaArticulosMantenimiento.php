<div class="row" id="listaMtto">
	<h5>Articulos que se han enviado a mantenimiento</h5>
	<div id="impArticulosMtto">
		<div class="col s10 offset-s1">
			<table id="tbArticulosMtto">
				
			</table>
		</div>
	</div>
	<div class="row">
			<div class="col s5 offset-s7">
				<a id="btnImprimirArtMtto" class="waves-effect waves-light btn green darken-2 "><i class="material-icons left">print</i>Imprimir</a>
			</div>
	</div>
</div>
<script>
    $(function(){
    	var l = {
         orientation: 'l',
         unit: 'mm',
         format: 'a3',
         compress: true,
         fontSize: 10,
         lineHeight: 1,
         autoSize: false,
         printHeaders: true}
         var doc = new jsPDF(l, '', '', '');
    var specialElementHandlers = {
        '#editor': function (element, renderer) {
            return true;
        }
    };

   $('#btnImprimirArtMtto').click(function () {
   		doc.margins = 1;
                doc.setFont("times");
   
        doc.fromHTML($('#impArticulosMtto').html(), 50, 20, {
        'setFontSize':10,
        'width': 300,
            'elementHandlers': specialElementHandlers
    });
doc.text(185,20, "Reporte de articulos en mantenimiento");
doc.text(180,27, "Instituto Tecnologico de Culiacan");
    doc.save('sample-file.pdf');
});
});
</script>
