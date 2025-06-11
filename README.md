# kata-wheel-fortune-3

Kata 61 per l'especialitat fullstackPHP 12-6-25

En aquesta kata continuarem el que vem començar a la [kata relacionada anterior](https://github.com/CloudSalander/kata-wheel-fortune-2)

Si la vas poder resoldre, fes servir el teu codi. Sino, pots fer servir el codi de la solució del mentor.

En aquesta continuació el que volem és introduir un mecanisme de puntuació en el joc. Per això:

- Abans de dir una lletra, el/la concursant ha de tirar la "ruleta de la fortuna". La ruleta pot tornar:
  - Valors 25,50,100,250,500.
  - Pèrdua torn: El torn passa al següent concursant.
  - Fallida: Pèrdua de torn i puntuació a 0.
- Si ha sortit algun valor en la tirada, llavors si, el/la concursant diu una lletra i s'afegeix tanta puntuació com el valor obtingut a la ruleta multiplicat per la quantitat de lletres trobades en el panel.
- Si la lletra no està en el panel, es perd el torn.

