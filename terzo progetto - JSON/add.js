const jsonString = '{"nome" : "SuperMario" , "lavoro" : "idraulico" , "cibo_preferito" : "funghi" , "superpotere_preferito" : "fiore di fuoco" }';
const personaggio = JSON.parse (jsonString);

personaggio.fidanzata = "Principessa_Peach";
personaggio.fratello = "Luigi";
personaggio.miglior_amico = "Yoshi";

const updatejsonString = JSON.stringify(personaggio, null, 2);
console.log(updatejsonString);




