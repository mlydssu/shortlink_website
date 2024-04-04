  function openClosePopup(id) {

    let modal = document.getElementById(id);

    if (modal.classList.contains('d-block')) {

      modal.classList.remove('d-block');
      modal.classList.add('d-none');

    } else {

      modal.classList.remove('d-none');
      modal.classList.add('d-block');

    }

  }

  function copyLink(elements) {

    var tag = elements.id;

    let copy = 'https://' + self.location.host + '/' + tag;

    navigator.clipboard.writeText(copy);
  }

  const isValidUrl = urlString => {
    var inputElement = document.createElement('input');
    inputElement.type = 'url';
    inputElement.value = urlString;

    if (!inputElement.checkValidity()) {
      return false;
    } else {
      return true;
    }
  }

  function editContentPopup(elements) {

    var tag = elements.id;
    let splitTag = tag.split('-');
    let modal = document.getElementById('updateLink');

    if (modal.classList.contains('d-none')) {

      let alertConfirm = confirm("Yakin Ingin Mengubah?");
    
      if (alertConfirm) {

        let form = document.getElementById('updateForm');
        
        let input = document.getElementById('aliasEdit');
        let button = form.getElementsByTagName('button');
        button[0].setAttribute('id', tag);
        input.setAttribute('value', splitTag[1]);

        modal.classList.remove('d-none');
        modal.classList.add('d-block');
  
      }

    } else {

      let splitTag = tag.split('-');

      let fullUrlValue = document.getElementById('fullurlEdit').value;

      if (isValidUrl(fullUrlValue)) {

        let fullurlEdit = document.getElementById('fullurlEdit').value;
        let aliasEdit = document.getElementById('aliasEdit').value;

        if (fullurlEdit != '' && aliasEdit != '') {
          
          const xhr = new XMLHttpRequest();
          xhr.responseType = "text";
          const method = "POST";
          const decode = "../system/adminOperate.php";
    
          xhr.open(method, decode, true);
          xhr.setRequestHeader(
            "Content-Type",
            "application/x-www-form-urlencoded",
          );
          xhr.onreadystatechange = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
              const status = xhr.status;
              if (status === 0 || (status >= 200 && status < 400)) {
                // The request has been completed successfully
                let dataRequest = xhr.response;
                
                alert(dataRequest);
                modal.classList.remove('d-block');
                modal.classList.add('d-none');
                location.reload();
    
              } else {
                // Oh no! There has been an error with the request!
                alert("Sistem Sedang Dalam Masalah!");;
    
              } 
            }
          }
  
          let fullData = 'edit='+splitTag[0]+'#'+aliasEdit+'#'+fullurlEdit;
          // console.log(fullData);
          xhr.send(fullData);

        } else {

          let editWarning = document.getElementById('editWarning');
          editWarning.innerHTML = 'Input Tidak Boleh Kosong!';
          editWarning.style.display = 'block';

        }

      } else {

        let editWarning = document.getElementById('editWarning');
        editWarning.style.display = 'block';

      }


    }
  }



  function addContentPopup() {

    let modal = document.getElementById('modalAddLink');

      let fullUrlValue = document.getElementById('fullurlTambah').value;

      if (isValidUrl(fullUrlValue)) {

        let fullurlTambah = document.getElementById('fullurlTambah').value;
        let aliasTambah = document.getElementById('aliasTambah').value;

        if (fullurlTambah != '' && aliasTambah != '') {
          
          const xhr = new XMLHttpRequest();
          xhr.responseType = "text";
          const method = "POST";
          const decode = "../system/adminOperate.php";
    
          xhr.open(method, decode, true);
          xhr.setRequestHeader(
            "Content-Type",
            "application/x-www-form-urlencoded",
          );
          xhr.onreadystatechange = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
              const status = xhr.status;
              if (status === 0 || (status >= 200 && status < 400)) {
                // The request has been completed successfully
                let dataRequest = xhr.response;
                
                alert(dataRequest);
                modal.classList.remove('d-block');
                modal.classList.add('d-none');
                location.reload();
    
              } else {
                // Oh no! There has been an error with the request!
                alert("Sistem Sedang Dalam Masalah!");;
    
              } 
            }
          }
  
          let fullData = 'tambah='+aliasTambah+'#'+fullurlTambah;
          // console.log(fullData);
          xhr.send(fullData);

        } else {

          let editWarning = document.getElementById('editWarning');
          editWarning.innerHTML = 'Input Tidak Boleh Kosong!';
          editWarning.style.display = 'block';

        }

      } else {

        let editWarning = document.getElementById('editWarning');
        editWarning.innerHTML = 'Data Yang Kamu Masukkan Bukan URL';
        editWarning.style.display = 'block';

      }


    }

    function deleteLinkContent(element) {

      var tag = element.id;
      let splitTag = tag.split('-');

      let alertConfirm = confirm("Yakin Ingin Menghapus??");

      if (alertConfirm) {

        const xhr = new XMLHttpRequest();
          xhr.responseType = "text";
          const method = "POST";
          const decode = "../system/adminOperate.php";
    
          xhr.open(method, decode, true);
          xhr.setRequestHeader(
            "Content-Type",
            "application/x-www-form-urlencoded",
          );
          xhr.onreadystatechange = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
              const status = xhr.status;
              if (status === 0 || (status >= 200 && status < 400)) {
                // The request has been completed successfully
                let dataRequest = xhr.response;
                
                alert(dataRequest);
                location.reload();
    
              } else {
                // Oh no! There has been an error with the request!
                alert("Sistem Sedang Dalam Masalah!");;
    
              } 
            }
          }
  
          let fullData = 'delete='+splitTag[0]+'#'+splitTag[1];
          xhr.send(fullData);

      }

    }

    function signOut() {

      window.location.href = "../system/logout.php/";
      
    }