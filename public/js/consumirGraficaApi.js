function mostrarGrafica(){
    let aseo = 0
    let medicamentos = 0
    let salud = 0
    //let graf = document.getElementById("grafica");
    let endpoint = "http://127.0.0.1:8000/api/productoApi";
    fetch(endpoint)

        .then(res => res.json())
        .then(function(data){
            data.forEach(element => {
                //contar cantidad de productos por categoria
                if(element.id_categoria == 10){
                    medicamentos++;
                }
                else if(element.id_categoria == 11){
                   salud++;
                }
                else if(element.id_categoria == 12){
                    aseo++;
                }
                console.log(aseo);
                console.log(medicamentos);
                console.log(salud);
            });

        //Variables para la grafica
        var data = [{
            values: [aseo, medicamentos, salud],
            labels: ['Aseo', 'Medicamentos', 'Salud'],
            type: 'pie'
        }];

        var layout = {
            height: 400,
            width: 500
        }
        Plotly.newPlot('grafica', data, layout);

    });
}
mostrarGrafica();
