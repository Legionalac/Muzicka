@extends('base')

@section('main')
<div class="row">
    <div class="row zaglavlje">
            <div class="col-md-12">
                <h1>Апликација за упис ученика у Музичку школу "Стеван Мокрањац" - Краљево</h1>

                <h3>Пријава</h3>
                <p class="podnaslov">За полагање пријемног испита за основну музичку школу</p>
                <p class="god">Школска <?php echo date("Y");
                echo "/";
                echo date('Y', strtotime('+1 year'));?>
                </p>
                <br />
            </div>
        </div>
    <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('prijavas.store') }}">
          @csrf
          <div class="row">
            <div class="col-md-4">
               <div class="form-group">
                 <label for="ime_ucenika">Име ученика</label>
                 <input type="text" class="form-control" name="ime_ucenika" id="ime_ucenika" aria-describedby="ImeUcenika" placeholder="Унесите име кандидата">
               </div>
            </div>

            <div class="col-md-4">
               <div class="form-group">
                 <label for="prezime_ucenika">Презиме ученика</label>
                 <input type="text" class="form-control" name="prezime_ucenika" id="prezime_ucenika" placeholder="Унесите презиме ученика">
               </div>
            </div>
            <div class="col-md-4">
                <label class="pol_label" for="pol_ucenika">Пол кандирата:</label><br/>
                <span class="pol_zenski">Женски:</span><input type="radio" name="pol" value="zenski">
                <span class="pol_muski">Мушки: </span><input type="radio" name="pol" value="muski">
            </div>
        </div>


        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="example-date-input">Унесите дан, месец и годину рођења</label>
                    <div class="">
                        <input class="form-control" name="datum_rodjenja" type="date" value="" id="datepicker" placeholder="Unesite datum rođenja">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
               <div class="form-group">
                 <label for="mesto_rodjenja">Место рођења, општина, (ако је дете рођено у иностранству, уписати и државу)</label>
                 <input type="text" class="form-control" name="mesto_rodjenja" id="mesto_rodjenja" placeholder="Унесите место рођења">
               </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
               <div class="form-group">
                 <label for="jmbg">JMBG</label>
                 <input type="text" class="form-control" name="jmbg" id="jmbg" placeholder="Унесите JMBG">
               </div>
            </div>
            <div class="col-md-8">
               <div class="form-group">
                 <label for="adresa">Адреса становања детета: (унесите) улицу, број, стан и место становања</label>
                 <input type="text" class="form-control" name="adresa" id="adresa" placeholder="Унесите адресу становања">
               </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                 <label for="skola">Унесите назив основне школе коју похађа кандидат</label>
                 <input type="text" class="form-control" name="skola" id="kontakt_osoba" placeholder="Унесите назив основне школе">
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                 <label for="razred">Унесите који разред похађа кандидат</label>
                 <input type="text" class="form-control" name="razred" id="razred" placeholder="Унесите разред">
               </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h2>ПОДАЦИ О РОДИТЕЉИМА </h2>
                <h4>
                    <strong>НАПОМЕНА:</strong> Уносом ЈМБГ-а родитеља није потребно достављати извод из матичне књиге 
                </h4>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                 <label for="ime_majke">Унесите име и презиме мајке</label>
                 <input type="text" class="form-control" name="ime_majke" id="ime_majke" placeholder="Унесите име и презиме мајке">
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                 <label for="ime_oca">Унесите име и презиме оца</label>
                 <input type="text" class="form-control" name="ime_oca" id="ime_oca" placeholder="Унесите име и презиме оца">
               </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                 <label for="jmbg_majke">Унесите JMBG мајке</label>
                 <input type="text" class="form-control" name="jmbg_majke" id="jmbg_majke" placeholder="Унесите JMBG мајке">
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                 <label for="jmbg_oca">Унесите JMBG оца</label>
                 <input type="text" class="form-control" name="jmbg_oca" id="jmbg_oca" placeholder="Унесите JMBG оца">
               </div>
            </div>
            

        </div>

        <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                 <label for="kontakt_osoba">Унесите име и презиме контакт особе</label>
                 <input type="text" class="form-control" name="kontakt_osoba" id="kontakt_osoba" placeholder="Унесите име и контакт особе">
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                 <label for="tel_fiksni">Унесите број фиксног телефона</label>
                 <input type="text" class="form-control" name="tel_fiksni" id="tel_fiksni" placeholder="Унесите број фиксног телефона">
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                 <label for="tel_mobilni">Унесите број мобилног телефона</label>
                 <input type="text" class="form-control" name="tel_mobilni" id="tel_mobilni" placeholder="Унесите број мобилног телефона">
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                 <label for="email">Унесите и-мејл контакт особе</label>
                 <input type="text" class="form-control" name="email" id="email" placeholder="Унесите и-мејл">
               </div>
            </div>
        </div>

        

        <div class="row">
            <div class="col-md-12">
                <h2>ПОДАЦИ О ПРИЈЕМНОМ</h2>
                <h4><strong>НАПОМЕНА:</strong> MОГУЋЕ ЈЕ КОНКУРИСАТИ САМО ЗА <strong>2 (ДВА) ИНСТРУМЕНТА</strong></h4>
                <h5><strong class="red">Прво морате одабрати трајање школовања, а затим инструмент!</strong></h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h4 class="prvi_instrument">Први инструмент:</h4>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="trajanje_1">Изаберите трајање школовања </label>
                    <select class="form-control" id="trajanje_1" name="skolovanje_1" onchange="setInstrument1(this)">
                        <option value="" selected>Изаберите трајање школовања:</option>
                        <option value="cetvorogodisnje">Четворогодишње школовање</option>
                        <option value="sestogodisnje">Шестогодишње школовање</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="instrument_1">Изаберите инструмент</label>
                    <select class="form-control" id="instrument_1" name="instrument_1">
                        <option value="" selected>Изаберите инструмент:</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <h4 class="prvi_instrument">Други инструмент:</h4>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="trajanje_1">Изаберите трајање школовања </label>
                    <select class="form-control" id="trajanje_2" name="skolovanje_2" onchange="setInstrument2(this)">
                        <option value="" selected>Изаберите трајање школовања:</option>
                        <option value="cetvorogodisnje">Четворогодишње школовање</option>
                        <option value="sestogodisnje">Шестогодишње школовање</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="instrument_1">Изаберите инструмент</label>
                    <select class="form-control" id="instrument_2" name="instrument_2">
                        <option value="" selected>Изаберите инструмент:</option>
                    </select>
                </div>
            </div>
        </div>



         <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Пошаљите пријаву</button>
            </div>
        </div>
    </form>
    </div>
 <script type="text/javascript">

var skolovanje = new Object()
skolovanje["dvogodisnje"] = [];
skolovanje["cetvorogodisnje"] = [{value:"102", text:"Соло певање"},
                                {value:"88", text:"Српско традиционално певање"},     
                                {value:"34", text:"Српско традиционално свирање (фрула)"},
                                {value:"44", text:"Српско традиционално свирање (гусле)"}
                                ];
skolovanje["sestogodisnje"] = [{value:"30", text:"Труба"},
                                {value:"21", text:"Кларинет"},
                                {value:"49", text:"Саксофон"},
                                {value:"76", text:"Хорна"},
                                {value:"14", text:"Тромбон"},
                                {value:"24", text:"Контрабас"},
                                {value:"15", text:"Удараљке"},
                                {value:"64", text:"Клавир"},
                                {value:"12", text:"Хармоника"},
                                {value:"22", text:"Гитара"},
                                {value:"32", text:"Виолина"},
                                {value:"42", text:"Виола"},
                                {value:"52", text:"Виолончело"},
                                {value:"62", text:"Флаута"},
                                ];


function setInstrument1(chooser){
    var newElem;
    var where = (navigator.appName == "Microsoft Internet Explorer") ? -1 : null;
    var instrumentChooser = chooser.form.elements["instrument_1"];
    while (instrumentChooser.options.length) {
        instrumentChooser.remove(0);
    }
    var choice = chooser.options[chooser.selectedIndex].value;
    var instrument = skolovanje[choice];
    newElem = document.createElement("option");
    newElem.text = "Изаберите инструмент:";
    newElem.value = "";
    instrumentChooser.add(newElem, where);
    if (choice != "") {
        for (var i = 0; i < instrument.length; i++) {
            newElem = document.createElement("option");
            newElem.text = instrument[i].text;
            newElem.value = instrument[i].text;
            instrumentChooser.add(newElem, where);
        }
    }
}

function setInstrument2(chooser){
    var newElem;
    var where = (navigator.appName == "Microsoft Internet Explorer") ? -1 : null;
    var instrumentChooser = chooser.form.elements["instrument_2"];
    while (instrumentChooser.options.length) {
        instrumentChooser.remove(0);
    }
    var choice = chooser.options[chooser.selectedIndex].value;
    var instrument = skolovanje[choice];
    newElem = document.createElement("option");
    newElem.text = "Изаберите инструмент:";
    newElem.value = "";
    instrumentChooser.add(newElem, where);
    if (choice != "") {
        for (var i = 0; i < instrument.length; i++) {
            newElem = document.createElement("option");
            newElem.text = instrument[i].text;
            newElem.value = instrument[i].text;
            instrumentChooser.add(newElem, where);
        }
    }
}

/**********
  DOM LEVEL 0 ALTERNATE
 **********
function setInstrument(chooser) {
    var cityChooser = chooser.form.elements["instrument_1"];
    // empty previous settings
    instrumentChooser.options.length = 0;
    // get chosen value to act as index to regiondb hash table
    var choice = chooser.options[chooser.selectedIndex].value;
    var db = regiondb[choice];
    // insert default first item
    cityChooser.options[0] = new Option("Choose a City:", "", true, false);
    if (choice != "") {
        // loop through array of the hash table entry, and populate options
        for (var i = 0; i < db.length; i++) {
            instrumentChooser.options[i + 1] = new Option(db[i].text, db[i].value);
        }
    }
}
**********/
</script>
@endsection
