var livro = {nome: "Luiz", idade:14};

//var livro = [{nome: "Luiz", id: 4},{nome: "Claudia", id: 5}];

//livro.forEach(function(items){
    //console.log(`O nome é ${items.nome}`)
//})

for (let p in livro) {
    console.log(livro.nome)
}