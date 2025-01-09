const JsonString = '{"nome" : "SuperMario" , "lavoro" : "idraulico" , "cibo_preferito" : "funghi" , "superpotere_preferito" : "fiore di fuoco" }'
const personaggio = JSON.parse(JsonString)
console.log(personaggio.nome)
console.log(personaggio.lavoro)
console.log(personaggio.cibo_preferito)
console.log(personaggio.superpotere_preferito)