const personaggio = { nome : "SuperMario",
                      lavoro : "idraulico",
                     cibo_preferito: "funghi",
                     superpotere_preferito: "fiore di fuoco" 
                    };
const jsonString = JSON.stringify(personaggio);
console.log(jsonString);