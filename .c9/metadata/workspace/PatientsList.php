{"filter":false,"title":"PatientsList.php","tooltip":"/PatientsList.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":5,"column":34},"end":{"row":5,"column":35},"action":"remove","lines":["T"],"id":7704}],[{"start":{"row":5,"column":34},"end":{"row":5,"column":35},"action":"remove","lines":[" "],"id":7705}],[{"start":{"row":5,"column":34},"end":{"row":5,"column":35},"action":"remove","lines":["0"],"id":7706}],[{"start":{"row":5,"column":34},"end":{"row":5,"column":35},"action":"remove","lines":[" "],"id":7707}],[{"start":{"row":5,"column":34},"end":{"row":5,"column":35},"action":"remove","lines":[","],"id":7708}],[{"start":{"row":5,"column":34},"end":{"row":5,"column":35},"action":"remove","lines":[" "],"id":7709}],[{"start":{"row":5,"column":34},"end":{"row":5,"column":35},"action":"remove","lines":["3"],"id":7710}],[{"start":{"row":5,"column":34},"end":{"row":5,"column":35},"action":"remove","lines":["0"],"id":7711}],[{"start":{"row":5,"column":33},"end":{"row":5,"column":34},"action":"remove","lines":["*"],"id":7712}],[{"start":{"row":5,"column":32},"end":{"row":5,"column":33},"action":"remove","lines":[" "],"id":7713}],[{"start":{"row":5,"column":31},"end":{"row":5,"column":32},"action":"remove","lines":["."],"id":7714}],[{"start":{"row":5,"column":24},"end":{"row":5,"column":25},"action":"insert","lines":["*"],"id":7715}],[{"start":{"row":5,"column":25},"end":{"row":5,"column":26},"action":"insert","lines":[" "],"id":7716}],[{"start":{"row":5,"column":26},"end":{"row":5,"column":27},"action":"insert","lines":["f"],"id":7717}],[{"start":{"row":5,"column":27},"end":{"row":5,"column":28},"action":"insert","lines":["r"],"id":7718}],[{"start":{"row":5,"column":28},"end":{"row":5,"column":29},"action":"insert","lines":["o"],"id":7719}],[{"start":{"row":5,"column":29},"end":{"row":5,"column":30},"action":"insert","lines":["m"],"id":7720}],[{"start":{"row":5,"column":30},"end":{"row":5,"column":31},"action":"insert","lines":[" "],"id":7721}],[{"start":{"row":28,"column":48},"end":{"row":28,"column":49},"action":"remove","lines":["7"],"id":7722}],[{"start":{"row":28,"column":47},"end":{"row":28,"column":48},"action":"remove","lines":["1"],"id":7723}],[{"start":{"row":28,"column":47},"end":{"row":28,"column":48},"action":"insert","lines":["2"],"id":7724}],[{"start":{"row":28,"column":50},"end":{"row":28,"column":63},"action":"remove","lines":["' '.$row[18]."],"id":7725}],[{"start":{"row":38,"column":0},"end":{"row":38,"column":1},"action":"insert","lines":["?"],"id":7727}],[{"start":{"row":38,"column":1},"end":{"row":38,"column":2},"action":"insert","lines":[">"],"id":7728}],[{"start":{"row":5,"column":40},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":7729},{"start":{"row":6,"column":0},"end":{"row":6,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":6,"column":4},"end":{"row":7,"column":0},"action":"insert","lines":["",""],"id":7730},{"start":{"row":7,"column":0},"end":{"row":7,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":7,"column":4},"end":{"row":12,"column":26},"action":"insert","lines":["$sql = \"SELECT medicalrecord. * , physician.name, physician.surname","            FROM medicalrecord","            INNER JOIN physician ON medicalrecord.physicianId = physician.physicianId","            WHERE medicalrecord.patientId = '$patientId'","            Order By medicalrecord.recordId Desc","            LIMIT 0 , 30\";"],"id":7731}],[{"start":{"row":7,"column":19},"end":{"row":7,"column":32},"action":"remove","lines":["medicalrecord"],"id":7732},{"start":{"row":7,"column":19},"end":{"row":7,"column":20},"action":"insert","lines":["p"]}],[{"start":{"row":7,"column":20},"end":{"row":7,"column":21},"action":"insert","lines":["a"],"id":7733}],[{"start":{"row":7,"column":21},"end":{"row":7,"column":22},"action":"insert","lines":["t"],"id":7734}],[{"start":{"row":7,"column":22},"end":{"row":7,"column":23},"action":"insert","lines":["i"],"id":7735}],[{"start":{"row":7,"column":23},"end":{"row":7,"column":24},"action":"insert","lines":["e"],"id":7736}],[{"start":{"row":7,"column":24},"end":{"row":7,"column":25},"action":"insert","lines":["n"],"id":7737}],[{"start":{"row":7,"column":25},"end":{"row":7,"column":26},"action":"insert","lines":["t"],"id":7738}],[{"start":{"row":7,"column":26},"end":{"row":7,"column":27},"action":"insert","lines":["."],"id":7739}],[{"start":{"row":7,"column":27},"end":{"row":7,"column":28},"action":"insert","lines":["*"],"id":7740}],[{"start":{"row":7,"column":28},"end":{"row":7,"column":29},"action":"remove","lines":["."],"id":7741}],[{"start":{"row":7,"column":28},"end":{"row":7,"column":29},"action":"remove","lines":[" "],"id":7742}],[{"start":{"row":7,"column":28},"end":{"row":7,"column":29},"action":"remove","lines":["*"],"id":7743}],[{"start":{"row":8,"column":17},"end":{"row":8,"column":30},"action":"remove","lines":["medicalrecord"],"id":7744},{"start":{"row":8,"column":17},"end":{"row":8,"column":18},"action":"insert","lines":["p"]}],[{"start":{"row":8,"column":18},"end":{"row":8,"column":19},"action":"insert","lines":["a"],"id":7745}],[{"start":{"row":8,"column":19},"end":{"row":8,"column":20},"action":"insert","lines":["t"],"id":7746}],[{"start":{"row":8,"column":20},"end":{"row":8,"column":21},"action":"insert","lines":["i"],"id":7747}],[{"start":{"row":8,"column":21},"end":{"row":8,"column":22},"action":"insert","lines":["e"],"id":7748}],[{"start":{"row":8,"column":22},"end":{"row":8,"column":23},"action":"insert","lines":["n"],"id":7749}],[{"start":{"row":8,"column":23},"end":{"row":8,"column":24},"action":"insert","lines":["t"],"id":7750}],[{"start":{"row":9,"column":36},"end":{"row":9,"column":49},"action":"remove","lines":["medicalrecord"],"id":7751},{"start":{"row":9,"column":36},"end":{"row":9,"column":37},"action":"insert","lines":["p"]}],[{"start":{"row":9,"column":37},"end":{"row":9,"column":38},"action":"insert","lines":["a"],"id":7752}],[{"start":{"row":9,"column":38},"end":{"row":9,"column":39},"action":"insert","lines":["t"],"id":7753}],[{"start":{"row":9,"column":39},"end":{"row":9,"column":40},"action":"insert","lines":["i"],"id":7754}],[{"start":{"row":9,"column":40},"end":{"row":9,"column":41},"action":"insert","lines":["e"],"id":7755}],[{"start":{"row":9,"column":41},"end":{"row":9,"column":42},"action":"insert","lines":["n"],"id":7756}],[{"start":{"row":9,"column":42},"end":{"row":9,"column":43},"action":"insert","lines":["t"],"id":7757}],[{"start":{"row":10,"column":12},"end":{"row":10,"column":56},"action":"remove","lines":["WHERE medicalrecord.patientId = '$patientId'"],"id":7758}],[{"start":{"row":11,"column":12},"end":{"row":12,"column":25},"action":"remove","lines":["Order By medicalrecord.recordId Desc","            LIMIT 0 , 30\""],"id":7759}],[{"start":{"row":9,"column":79},"end":{"row":9,"column":80},"action":"insert","lines":[";"],"id":7760}],[{"start":{"row":9,"column":80},"end":{"row":9,"column":81},"action":"insert","lines":["\""],"id":7761}],[{"start":{"row":9,"column":81},"end":{"row":10,"column":12},"action":"remove","lines":["","            "],"id":7762}],[{"start":{"row":9,"column":81},"end":{"row":10,"column":0},"action":"remove","lines":["",""],"id":7763}],[{"start":{"row":9,"column":81},"end":{"row":9,"column":82},"action":"remove","lines":[" "],"id":7764}],[{"start":{"row":9,"column":81},"end":{"row":9,"column":82},"action":"remove","lines":[" "],"id":7765}],[{"start":{"row":9,"column":81},"end":{"row":9,"column":82},"action":"remove","lines":[" "],"id":7766}],[{"start":{"row":9,"column":81},"end":{"row":9,"column":82},"action":"remove","lines":[" "],"id":7767}],[{"start":{"row":9,"column":81},"end":{"row":9,"column":82},"action":"remove","lines":[" "],"id":7768}],[{"start":{"row":9,"column":81},"end":{"row":9,"column":82},"action":"remove","lines":[" "],"id":7769}],[{"start":{"row":9,"column":81},"end":{"row":9,"column":82},"action":"remove","lines":[" "],"id":7770}],[{"start":{"row":9,"column":81},"end":{"row":9,"column":82},"action":"remove","lines":[" "],"id":7771}],[{"start":{"row":9,"column":81},"end":{"row":9,"column":82},"action":"remove","lines":[" "],"id":7772}],[{"start":{"row":9,"column":81},"end":{"row":9,"column":82},"action":"remove","lines":[" "],"id":7773}],[{"start":{"row":9,"column":81},"end":{"row":9,"column":82},"action":"remove","lines":[" "],"id":7774}],[{"start":{"row":9,"column":81},"end":{"row":9,"column":82},"action":"remove","lines":[" "],"id":7775}],[{"start":{"row":7,"column":6},"end":{"row":7,"column":8},"action":"remove","lines":["ql"],"id":7776}],[{"start":{"row":7,"column":5},"end":{"row":7,"column":6},"action":"remove","lines":["s"],"id":7777}],[{"start":{"row":7,"column":4},"end":{"row":7,"column":5},"action":"remove","lines":["$"],"id":7778},{"start":{"row":7,"column":4},"end":{"row":7,"column":10},"action":"insert","lines":["$query"]}],[{"start":{"row":5,"column":2},"end":{"row":5,"column":40},"action":"remove","lines":["  $query =    \"SELECT * from patient\";"],"id":7779}],[{"start":{"row":5,"column":1},"end":{"row":5,"column":2},"action":"remove","lines":[" "],"id":7780}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":1},"action":"remove","lines":[" "],"id":7781}],[{"start":{"row":4,"column":0},"end":{"row":5,"column":0},"action":"remove","lines":["",""],"id":7782}],[{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"remove","lines":["",""],"id":7783}],[{"start":{"row":2,"column":40},"end":{"row":3,"column":0},"action":"remove","lines":["",""],"id":7784}],[{"start":{"row":2,"column":39},"end":{"row":2,"column":40},"action":"remove","lines":[";"],"id":7785}],[{"start":{"row":2,"column":39},"end":{"row":2,"column":40},"action":"insert","lines":[";"],"id":7786}],[{"start":{"row":29,"column":47},"end":{"row":29,"column":48},"action":"remove","lines":["2"],"id":7787}],[{"start":{"row":29,"column":47},"end":{"row":29,"column":48},"action":"insert","lines":["1"],"id":7788}],[{"start":{"row":29,"column":48},"end":{"row":29,"column":49},"action":"insert","lines":["7"],"id":7789}],[{"start":{"row":29,"column":51},"end":{"row":29,"column":52},"action":"insert","lines":["'"],"id":7790}],[{"start":{"row":29,"column":52},"end":{"row":29,"column":53},"action":"insert","lines":[" "],"id":7791}],[{"start":{"row":29,"column":53},"end":{"row":29,"column":54},"action":"insert","lines":["'"],"id":7792}],[{"start":{"row":29,"column":54},"end":{"row":29,"column":55},"action":"insert","lines":["."],"id":7793}],[{"start":{"row":29,"column":55},"end":{"row":29,"column":56},"action":"insert","lines":["$"],"id":7794}],[{"start":{"row":29,"column":56},"end":{"row":29,"column":57},"action":"insert","lines":["r"],"id":7795}],[{"start":{"row":29,"column":57},"end":{"row":29,"column":58},"action":"insert","lines":["o"],"id":7796}],[{"start":{"row":29,"column":58},"end":{"row":29,"column":59},"action":"insert","lines":["w"],"id":7797}],[{"start":{"row":29,"column":59},"end":{"row":29,"column":60},"action":"insert","lines":["["],"id":7798}],[{"start":{"row":29,"column":60},"end":{"row":29,"column":61},"action":"insert","lines":["'"],"id":7799}],[{"start":{"row":29,"column":60},"end":{"row":29,"column":61},"action":"remove","lines":["'"],"id":7800}],[{"start":{"row":29,"column":60},"end":{"row":29,"column":61},"action":"insert","lines":["1"],"id":7801}],[{"start":{"row":29,"column":61},"end":{"row":29,"column":62},"action":"insert","lines":["8"],"id":7802}],[{"start":{"row":29,"column":62},"end":{"row":29,"column":63},"action":"insert","lines":["]"],"id":7803}],[{"start":{"row":29,"column":63},"end":{"row":29,"column":64},"action":"insert","lines":["."],"id":7804}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":4},"action":"insert","lines":["    "],"id":7805},{"start":{"row":6,"column":0},"end":{"row":6,"column":4},"action":"insert","lines":["    "]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":6,"column":36},"end":{"row":6,"column":36},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1481245668245,"hash":"bbb29b952ff2bd8a7c014a7856925e6c3017f644"}