// navbar
$(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbaro').addClass('active');
        } else {
            $('.navbaro').removeClass('active');
        }
    });
});

// api all
const apidata={
    url: "https://coronavirus-19-api.herokuapp.com/",
    type:"countries",

}
const {url,type} = apidata
const urlapi =`${url}${type}`
fetch(urlapi , {
    // method: 'GET', // *GET, POST, PUT, DELETE, etc.
    // mode: 'same-origin', // no-cors, *cors, same-origin
    // cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
    // credentials: 'omit', // include, *same-origin, omit
    // headers: {
    //   'Content-Type': 'application/json'
      // 'Content-Type': 'application/x-www-form-urlencoded',
    // },
    // redirect: 'follow', // manual, *follow, error
    // referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
    // body: JSON.stringify(data) // body data type must match "Content-Type" header

})

.then( (data) => data.json())
.then( (api)=> cases(api))


const cases = (data) => {
    // console.log(data);
    const caseglobal =`
    
             <h5 class="card-title">Global</h5>
              <p class="card-text">Country : ${data.length} </p>
              <p class="card-text">Confirmed : ${data[0].cases} </p>
              <p class="card-text">Death :${data[0].deaths} </p>
    `
    const globaldiv = document.querySelector('#caseglob')
    globaldiv.innerHTML = caseglobal
    
     const caselocal =`
    
             <h5 class="card-title">Indonesia</h5>
              <p class="card-text">Province : 34 </p>
              <p class="card-text">Confirmed : ${data[18].cases} </p>
              <p class="card-text">Death :${data[18].deaths} </p>
    `
    const localdiv = document.querySelector('#caseloc')
    localdiv.innerHTML = caselocal
}

// local data
let datambah = [{
            "provinsi": "DKI Jakarta",
            "jumlahVaksin": 120040,
            "jumlahPenduduk": 11100929
        },

        {
            "provinsi": "Bali",
            "jumlahVaksin": 51000,
            "jumlahPenduduk": 4261909
        },
        {
            "provinsi": "Aceh",
            "jumlahVaksin": 27880,
            "jumlahPenduduk": 5288885
        },
        {
            "provinsi": "Sumatera Utara",
            "jumlahVaksin": 40000,
            "jumlahPenduduk": 15032170
        },
        {
            "provinsi": "Sumatera Barat",
            "jumlahVaksin": 36920,
            "jumlahPenduduk": 5568881
        },
        {
            "provinsi": "Riau",
            "jumlahVaksin": 20000,
            "jumlahPenduduk": 6220680
        },
        {
            "provinsi": "Kepulauan Riau",
            "jumlahVaksin": 25320,
            "jumlahPenduduk": 1983597
        },
        {
            "provinsi": "Jambi",
            "jumlahVaksin": 20000,
            "jumlahPenduduk": 3497833
        },
        {
            "provinsi": "Bengkulu",
            "jumlahVaksin": 20280,
            "jumlahPenduduk": 2014369
        },
        {
            "provinsi": "Sumatera Selatan",
            "jumlahVaksin": 30000,
            "jumlahPenduduk": 8342101
        },
        {
            "provinsi": "Bangka Belitung",
            "jumlahVaksin": 10280,
            "jumlahPenduduk": 1406583
        },
        {
            "provinsi": "Lampung",
            "jumlahVaksin": 40520,
            "jumlahPenduduk": 9062766
        },
        {
            "provinsi": "Banten",
            "jumlahVaksin": 14560,
            "jumlahPenduduk": 11042523
        },
        {
            "provinsi":"Jawa Barat",
            "jumlahVaksin": 97080,
            "jumlahPenduduk": 46092205
        },
        {
            "provinsi": "Jawa Tengah",
            "jumlahVaksin": 62560,
            "jumlahPenduduk": 36896752
        },
        {
            "provinsi": "Daerah Istimewa Yogyakarta",
            "jumlahVaksin": 26800,
            "jumlahPenduduk": 3668304
        },
        {
            "provinsi": "Jawa Timur",
            "jumlahVaksin": 77760,
            "jumlahPenduduk": 40963227
        },
        {
            "provinsi": "Nusa Tenggara Barat",
            "jumlahVaksin": 28760,
            "jumlahPenduduk": 5321552
        },
        {
            "provinsi": "Nusa Tenggara Timur",
            "jumlahVaksin": 13200,
            "jumlahPenduduk": 5452967
        },
        {
            "provinsi": "Kalimantan Barat",
            "jumlahVaksin": 18360,
            "jumlahPenduduk": 5457352
        },
        {
            "provinsi": "Kalimantan Selatan",
            "jumlahVaksin": 30480,
            "jumlahPenduduk": 4070320
        },
        {
            "provinsi": "Kalimantan Tengah",
            "jumlahVaksin": 14680,
            "jumlahPenduduk": 2602119
        },
        {
            "provinsi": "Kalimantan Timur",
            "jumlahVaksin": 25520,
            "jumlahPenduduk": 3661161
        },
        {
            "provinsi": "Kalimantan Utara",
            "jumlahVaksin": 10680,
            "jumlahPenduduk": 663696
        },
        {
            "provinsi": "Gorontalo",
            "jumlahVaksin": 9760,
            "jumlahPenduduk": 1189685
        },
        {
            "provinsi": "Sulawesi Barat",
            "jumlahVaksin": 10960,
            "jumlahPenduduk": 1563289
        },
        {
            "provinsi": "Sulawesi Selatan",
            "jumlahVaksin": 66640,
            "jumlahPenduduk": 9175971
        },
        {
            "provinsi": "Sulawesi Tengah",
            "jumlahVaksin": 22120,
            "jumlahPenduduk": 2987711
        },
        {
            "provinsi": "Sulawesi Tenggara",
            "jumlahVaksin": 20400,
            "jumlahPenduduk": 2649845
        },
        {
            "provinsi": "Sulawesi Utara",
            "jumlahVaksin": 23760,
            "jumlahPenduduk": 2659987
        },
        {
            "provinsi": "Maluku",
            "jumlahVaksin": 15120,
            "jumlahPenduduk": 1864335
        },
        {
            "provinsi": "Maluku Utara",
            "jumlahVaksin": 7160,
            "jumlahPenduduk": 1318178
        },
        {
            "provinsi": "Papua Barat",
            "jumlahVaksin": 7160,
            "jumlahPenduduk": 1146666
        },
        {
            "provinsi": "Papua",
            "jumlahVaksin": 14680,
            "jumlahPenduduk": 4354468
        }
]


    const localcase = document.querySelector('#tabledaerah')
    let urlapis = "https://indonesia-covid-19.mathdro.id/api/provinsi"

    const resultdata = ({ data }) => {
        $(document).ready(function () {
             $('#daerah').DataTable();
         })

        let newdata = data.map(x => ({
            ...x,
            ...datambah.find(({
                provinsi
            }) => provinsi === x.provinsi)
        }))
        newdata.pop(1)
        newdata.forEach(x => {
            // console.log(x);
            let row = `
            <tr>
              <td>${x.provinsi}</td>
              <td>${x.kasusPosi}</td>
              <td>${x.kasusSemb}</td>
              <td>${x.kasusMeni}</td>
              <td>${x.jumlahVaksin}</td>
              <td>${x.jumlahPenduduk}</td>
            </tr>
        `
            localcase.innerHTML += row
        })
        }

    // fetching
     fetch(urlapis)
     .then(raw => raw.json())
     .then(res => resultdata(res))
    //  .then(tables())

//data harian

const urel = "https://data.covid19.go.id/public/api/update.json"
console.log(urel);

fetch(`https://api.allorigins.win/get?url=${encodeURIComponent(urel)}`)
        .then(response => {
            console.log(response)
            if (response.ok) {
                return response.json()
            } else {
                throw new Error('Respon gagal')
            }

        })
        .then(res => caseb(JSON.parse(res.contents)))
        
        
const caseb = (data) => {
    let positif =  document.querySelector(".positifcard")   
    let sembuh = document.querySelector(".sembuhcard") 
    let tewas = document.querySelector(".tewascard") 
    let updated = document.querySelectorAll(".updated-info")

    positif.innerHTML= data.update.penambahan.jumlah_positif
    sembuh.innerHTML= data.update.penambahan.jumlah_sembuh
    tewas.innerHTML= data.update.penambahan.jumlah_meninggal
    updated.forEach(updated => {
        updated.innerHTML ='pada tanggal '+data.update.penambahan.tanggal
    });

    console.log(data);
}

// vaksinasi
const vaksin = {
    'dosispertama' : {
        'persen' : '36,395%',
        'dosis' : 14685236,
        'penerima' : 40349049,
        'tanggal': '22 Mei 2021'
    },
        'dosiskedua' : {
        'persen' : '24,156%',
        'dosis' : 9746522,
        'penerima' : 40349049,
        'tanggal': '22 Mei 2021'
    }
}
console.log(vaksin);

let persen = document.querySelector(".persen")
let persenone = document.querySelector(".persenone")
let persentwo = document.querySelector(".persentwo")
let dosis = document.querySelector(".dosisone")
let penerima = document.querySelector(".penerimaone")
let tanggal = document.querySelector(".updated-vaksin")

tanggal.innerHTML ='terakhir diupdate pada '+ vaksin.dosispertama.tanggal
persenone.innerHTML = `<b>${vaksin.dosispertama.dosis} </b>(${vaksin.dosispertama.persen}) `
persentwo.innerHTML = `<b>${vaksin.dosiskedua.dosis} </b>(${vaksin.dosiskedua.persen}) `
penerima.innerHTML = `<b>${vaksin.dosiskedua.penerima}</b> `
// let dataharianf =  $.getJSON(urel)




