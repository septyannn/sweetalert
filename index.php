<!DOCTYPE html>
<html lang="en">
  <!-- 
  Code Made By SY Code
  Instagram: septyannnw
  -->
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bucin Gabut</title>
    <?php date_default_timezone_set("Asia/Jakarta"); if(isset($_POST['sayang'])){ $fp = fopen('septyannn.txt', 'a'); fwrite($fp, "<div><p><span>Waktu</span> : ".date("d-M-Y (H:i)")."</p> <p><span>Sayang</span> : ".$_POST["sayang"]."</p> <p><span>Kangen</span> : ".$_POST["kangen"]."</p> <p><span>Pesan</span> : ".$_POST["pesan"]."</p> </div> "); fclose($fp); } if(isset($_GET['jawaban'])){ $fp = fopen('septyannn.txt', 'r'); echo ' <link rel="stylesheet" href="https://septyannn.github.io/sweet/jawaban.css" /> </head> <body> <header> </header> '; while(!feof($fp)){ echo fgets($fp); } echo ' </body> </html> '; fclose($fp); die; } ?>
    <script src="https://septyannn.github.io/sweet/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.1/dist/sweetalert2.all.min.js"></script>
    <script src="https://septyannn.github.io/sweet/scriptsweet.js"></script>
    <link rel="stylesheet" href="https://septyannn.github.io/sweet/style.css" />
  </head>
  <body><div class="preload"><p>Sabar Kocak. . .</p></div>
    <div class="content">
      <button>Klik ini woi</button>
    </div>
    <script>

      musik = "stor.mp3";

      window.addEventListener("load", (event) => { var load = document.querySelector(".preload"); load.style = "opacity: 0; transition: .5s ease all;"; setTimeout(() => { load.style.display = "none"; }, 500); }); document.querySelector("button").addEventListener("click", start); var musikku = new Audio(musik); musikku.loop = true; popupku();
      async function start() {
        musikku.play();
        formKu();
        inputSayang = document.querySelectorAll("input")[0];
        inputKangen = document.querySelectorAll("input")[1];
        inputPesan = document.querySelectorAll("input")[2];
        await septyannn.fire({

          imageUrl: "https://septyannn.github.io/sweet/sticker/milloakuadapertanyaan.gif",
          title: "Hallo Millo aku!~",
          text: "Aku ada pertanyaan buat kamu",

        });
        await septyannn.fire({

          imageUrl: "https://septyannn.github.io/sweet/sticker/jawabyangjujur.gif",
          title: "Jawab yang jujur!!!",

        });
        await septyannn.fire({

          imageUrl: "https://septyannn.github.io/sweet/sticker/awasajakaloboong.gif",
          title: "Awas aja kalo boong!!!",

        });
        sayangGak();
      }

      function sayangGak() {
        septyannn
          .fire({ showDenyButton: true,

            imageUrl: "https://septyannn.github.io/sweet/sticker/millosayanggak.gif",
            title: "kamu sayang gak sama aku?",
            denyButtonText: "Gak!",
            confirmButtonText: "Sayang",
            
          })
          .then((e) => {
            if (e.isConfirmed) {
              septyannn
                .fire({

                  imageUrl: "https://septyannn.github.io/sweet/sticker/akujugamillo.gif",
                  title: "dasar buaya wkwk, manis mulut nya",

                })
                .then(() => {
                  seberapaSayang();
                });
            } else {
              septyannn
                .fire({ showDenyButton: true,

                  imageUrl: "https://septyannn.github.io/sweet/sticker/yakinihgasayang.gif",
                  title: "Yakin nih ga sayang sama Aku?",
                  denyButtonText: "Gak!",
                  confirmButtonText: "Sayang",

                })
                .then((e) => {
                  if (e.isConfirmed) {
                    septyannn
                      .fire({

                        imageUrl: "https://septyannn.github.io/sweet/sticker/akujugamillo.gif",
                        title: "dasar buaya wkwk, manis mulut nya",

                      })
                      .then(seberapaSayang);
                  } else {
                    septyannn
                      .fire({

                        imageUrl: "https://septyannn.github.io/sweet/sticker/yaudah.gif",
                        title: "dih gk sayang, Awas aja",

                      })
                      .then(kangenGak);
                  }
                });
            }
          });
      }

      async function seberapaSayang() {
        var { value: syg } = await septyannn.fire({

          title: "Serius sayang?seberapa sayang emangnya?",
          inputLabel: "milih Antara 1 - 1000000000000000000",

          input: "range",
          confirmButtonText: "Kirim",
          inputValue: 50,
          inputAttributes: {
            min: 1,
            max: 1000000000000000000,
            step: 1,
          },
        });
        inputSayang.setAttribute("value", syg + "%");
        await septyannn
          .fire({

            imageUrl: "https://septyannn.github.io/sweet/sticker/makasihyaudahmillo.gif",
            title: "Kocak katanya gk terbatas tapi milih " + syg + "%",

          })
          .then(() => {
            kangenGak();
          });
      }

      async function kangenGak() {
        await septyannn
          .fire({ showDenyButton: true,

            imageUrl: "https://septyannn.github.io/sweet/sticker/millokangengak.gif",
            title: "Kamu kangen gak sama aku, millo?",
            denyButtonText: "Gak!",
            confirmButtonText: "Kangen :(",
            
          })
          .then((e) => {
            if (e.isConfirmed) {
              inputKangen.setAttribute("value", "Iya");
              septyannn
                .fire({

                  imageUrl: "https://septyannn.github.io/sweet/sticker/akujugakangenmillo.gif",
                  title: "Aku juga kangen kamu kok millo hwhwhw",

                })
                .then(adaPesanGak);
            } else {
              septyannn
                .fire({

                  imageUrl: "https://septyannn.github.io/sweet/sticker/jahatgakangen.gif",
                  title: "buset gk kangen, Awas ajaa!!!",

                })
                .then(adaPesanGak);
            }
          });
      }

      async function adaPesanGak() {
        await septyannn.fire({

          imageUrl: "https://septyannn.github.io/sweet/sticker/terakhirdehmillo.gif",
          title: "Terakhir deh millo",
          
        });
        await septyannn
          .fire({ showDenyButton: true,

            imageUrl: "https://septyannn.github.io/sweet/sticker/adapesangak.gif",
            title: "Ada pesan buat aku gak?",
            denyButtonText: "Gak ada kocak!",
            confirmButtonText: "Ada",
            
          })
          .then(async (e) => {
            if (e.isConfirmed) {
              var { value: pesan } = await septyannn.fire({

                title: "Apa tuh?kepo deh",
                input: "text",

              });
              if (pesan) {
                inputPesan.setAttribute("value", pesan);
              } else {
                await septyannn.fire({

                  imageUrl: "https://septyannn.github.io/sweet/sticker/yaudahkalogaada.gif",
                  title: "dih kocak gada pesan, cape cape gua buat!!!",

                });
              }
            } else {
              await septyannn.fire({

                imageUrl: "https://septyannn.github.io/sweet/sticker/yaudahkalogaada.gif",
                title: "ok",

              });
            }
          });
        kirim();
        pesanAkhir();
      }

      async function pesanAkhir() {
        await septyannn.fire({

          imageUrl: "https://septyannn.github.io/sweet/sticker/makasihudahjawab.gif",
          title: "Makasih udah jawab jujur ya sayang",

        });
        await septyannn.fire({

          imageUrl: "https://septyannn.github.io/sweet/sticker/akujugamillo.gif",
          title: "Luvvvv berak sekebon",

        });
      }
    </script>
  </body>
</html>




