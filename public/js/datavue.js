var ejecution = new Vue({
    el : '#ejecution',
    data : {
        codigos: 'for ($count = 0; $count < 10; $count++) {print("abc");}'
    },
    method:{
        getData: function(){
            this.codigos = document.getElementById('CodigoResultante').value;
            console.log(codigos);
        }
    }
})