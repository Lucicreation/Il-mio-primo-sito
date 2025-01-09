const jsonString = '{"nome" : "SuperMario" , "lavoro" : "idraulico" , "cibo_preferito" : "funghi" , "superpotere_preferito" : "fiore di fuoco" , "fidanzata" : "Principessa_Peach" , "fratello" : "Luigi", "miglior_amico" : "Yoshi"}';
const personaggio = JSON.parse(jsonString);
console.log("prima della rimozione", personaggio);
delete personaggio.cibo_preferito;
console.log("dopo la rimozione", personaggio);
const updatejsonString = JSON.stringify(personaggio, null, 1);


