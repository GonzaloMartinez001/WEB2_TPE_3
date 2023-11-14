# Web2_TPE_3ra parte
3ra parte del trabajo especial de la materia Web2



ENDPOINTS COMPANY (categoria)

(GET) /api/companies
Devuelve todas las companias.

(POST) /api/companies
Agrega una compania pasandole un JSON en el body de la request.


Ejemplo:
     {  
     
        "company_name": "Square Enix"  
        
     }
     
(GET) /api/companies/:ID
Devuelve la informacion de la compania con la id ingresada.

(DELETE) /api/companies/:ID
Borra la informacion de la compania con la id ingresada.

(PUT) /api/companies/:ID
Modifica los datos de la compania con la id ingresada, se debe pasar un JSON como body de la request.

Ejemplo:
     { 
     
        "company_name": "Valve"
        
     }
     
     
     
     
     
ENPOINTS GAME (Item)

(GET) /api/games
Devuelve todos los games.

(POST) /api/games
Agrega un game pasandole un JSON en el body de la request.


Ejemplo:
     {   
     
        "game_ID": 12,
    	"game_name": "Tomb Raider",
    	"genre": "Action",
    	"year": 2013,
   	"score": 8,
   	"company_ID": 10
        
     }
     
(GET) /api/games/:ID
Devuelve la informacion de los games con la id ingresada.

(DELETE) /api/games/:ID
Borra la informacion de los games con la id ingresada.

(PUT) /api/games/:ID
Modifica los datos de los games con la id ingresada, se debe pasar un JSON como body de la request.

Ejemplo:
     { 
     
        "game_ID": 12,
   	"game_name": "Tomb Raider",
    	"genre": "Action",
    	"year": 2013,
    	"score": 8,
    	"company_ID": 10
        
     }
(GET) /api/games-company/:ID
Devuelve la informacion de un game solicitado por la id ingresada correspondiente a una company.
Ejemplo: (busco games asociados a la company_ID : 10)
	{
	        "game_ID": 12,
	        "game_name": "Tomb Raider",
	        "genre": "Action",
	        "year": 2013,
	        "score": 8,
	        "company_ID": 10
	    }

