"use strict";

// Class definition
var KTWizard6 = (function () {
  // Base elements
  var _wizardEl;
  var _formEl;
  var _wizardObj;
  var _validations = [];

  // Private functions
  var _initWizard = function () {
    // Initialize form wizard
    _wizardObj = new KTWizard(_wizardEl, {
      startStep: 1, // initial active step number
      clickableSteps: false, // allow step clicking
    });

    // Validation before going to next page
    _wizardObj.on("change", function (wizard) {
      if (wizard.getStep() > wizard.getNewStep()) {
        return; // Skip if stepped back
      }

      // Validate form before change wizard step
      var validator = _validations[wizard.getStep() - 1]; // get validator for currnt step

      if (validator) {
        validator.validate().then(function (status) {
          if (status == "Valid") {
            wizard.goTo(wizard.getNewStep());

            KTUtil.scrollTop();
          } else {
            Swal.fire({
              text: "Sorry.",
              icon: "error",
              buttonsStyling: false,
              confirmButtonText: "Ok, got it!",
              customClass: {
                confirmButton: "btn font-weight-bold btn-light",
              },
            }).then(function () {
              KTUtil.scrollTop();
            });
          }
        });
      }

      return false; // Do not change wizard step, further action will be handled by he validator
    });

    // Change event
    _wizardObj.on("changed", function (wizard) {
      KTUtil.scrollTop();
    });

    // Submit event
    _wizardObj.on("submit", function (wizard) {
      Swal.fire({
        text: "All is good! Please confirm the form submission.",
        icon: "success",
        showCancelButton: true,
        buttonsStyling: false,
        confirmButtonText: "Yes, submit!",
        confirmButtonText: "Yes, submit!",
        cancelButtonText: "No, cancel",
        customClass: {
          confirmButton: "btn font-weight-bold btn-primary",
          cancelButton: "btn font-weight-bold btn-default",
        },
      }).then(function (result) {
        if (result.value) {
          _formEl.submit(); // Submit form
        } else if (result.dismiss === "cancel") {
          Swal.fire({
            text: "Your form has not been submitted!.",
            icon: "error",
            buttonsStyling: false,
            confirmButtonText: "Ok, got it!",
            customClass: {
              confirmButton: "btn font-weight-bold btn-primary",
            },
          });
        }
      });
    });
  };

  const cek = true;
  var _initValidation = function () {
    // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    // Step 1
    _validations.push(
      FormValidation.formValidation(_formEl, {
        fields: {
          nama_lengkap: {
            validators: {
              notEmpty: {
                message: "Nama Harus Di isi",
              },
            },
          },
          alamat: {
            validators: {
              notEmpty: {
                message: "Alamat Harus Di isi",
              },
            },
          },
          no_hp: {
            validators: {
              notEmpty: {
                message: "Nomor HP Harus Di isi",
              },
              stringLength: {
                min: 11,
                max: 13,
                message: "Nomor HP Harus Sempurna",
              },
            },
          },
          kabupaten: {
            validators: {
              notEmpty: {
                message: "Kabupaten Harus Di isi",
              },
            },
          },
          provinsi: {
            validators: {
              notEmpty: {
                message: "Provinsi Harus Di isi",
              },
            },
          },
          jenis_kelamin: {
            validators: {
              notEmpty: {
                message: "Jenis Kelamin Harus Di Pilih",
              },
              callback: {
                message: "Jenis Kelamin Error",
                callback: (input) => {
                  if (
                    (input.value != "laki-laki" &&
                      input.value != "perempuan") ||
                    input.value == ""
                  )
                    return false;
                  else return true;
                },
              },
            },
          },
          tanggal: {
            validators: {
              notEmpty: {
                message: "Tanggal Harus Di Pilih",
              },
            },
          },
          status: {
            validators: {
              notEmpty: {
                message: "Status Harus Di Pilih",
              },
              callback: {
                message: "Status Error",
                callback: (input) => {
                  if (
                    (input.value != "umum" &&
                      input.value != "mahasiswa" &&
                      input.value != "siswa") ||
                    input.value == ""
                  )
                    return false;
                  else return true;
                },
              },
            },
          },
          asal: {
            validators: {
              notEmpty: {
                message: "Asal Harus Di isi",
              },
            },
          },
          foto: {
            validators: {
              notEmpty: {
                message: "Foto tidak boleh kosong",
              },
              file: {
                extension: "jpeg,jpg,png",
                type: "image/jpeg,image/png",
                maxSize: 2097152, // 2048 * 1024
                message: "The selected file is not valid",
              },
            },
          },
        },
        plugins: {
          trigger: new FormValidation.plugins.Trigger(),
          // Bootstrap Framework Integration
          bootstrap: new FormValidation.plugins.Bootstrap({
            //eleInvalidClass: '',
            eleValidClass: "",
          }),
        },
      })
    );

    // Step 2
    _validations.push(
      FormValidation.formValidation(_formEl, {
        fields: {
          materi: {
            validators: {
              notEmpty: {
                message: "Materi Harus Di Pilih",
              },
              callback: {
                message: "Materi Error",
                callback: (input) => {
                  if (
                    (input.value != "laravel" &&
                      input.value != "react" &&
                      input.value != "mysql" &&
                      input.value != "figma" &&
                      input.value != "mikrotik" &&
                      input.value != "illustrator" &&
                      input.value != "premiere") ||
                    input.value == ""
                  )
                    return false;
                  else return true;
                },
              },
            },
          },
          media_pembelajaran: {
            validators: {
              notEmpty: {
                message: "Media Pembelajaran Harus Di Pilih",
              },
              callback: {
                message: "Media Pembelajaran Error",
                callback: (input) => {
                  if (
                    (input.value != "offline" && input.value != "online") ||
                    input.value == ""
                  )
                    return false;
                  else return true;
                },
              },
            },
          },
          laptop: {
            validators: {
              notEmpty: {
                message: "Laptop Harus Di pilih",
              },
              callback: {
                message: "Laptop Error",
                callback: (input) => {
                  if (
                    (input.value != "punya" && input.value != "tidak") ||
                    input.value == ""
                  )
                    return false;
                  else return true;
                },
              },
            },
          },
          harga: {
            validators: {
              notEmpty: {
                message: "harga Harus Di Pilih",
              },
              callback: {
                message: "Harga Error",
                callback: (input) => {
                  let materi = document.getElementsByName("materi")[0].value;
                  if (materi == "laravel")
                    if (input.value != "15000" || input.value == "")
                      return false;
                    else return true;
                },
              },
            },
          },
        },
        plugins: {
          trigger: new FormValidation.plugins.Trigger(),
          // Bootstrap Framework Integration
          bootstrap: new FormValidation.plugins.Bootstrap({
            //eleInvalidClass: '',
            eleValidClass: "",
          }),
        },
      })
    );
  };

  return {
    // public functions
    init: function () {
      _wizardEl = KTUtil.getById("kt_wizard");
      _formEl = KTUtil.getById("kt_form");

      _initWizard();
      _initValidation();
    },
  };
})();

jQuery(document).ready(function () {
  KTWizard6.init();
});
