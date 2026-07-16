document.querySelectorAll(".toggleBtn").forEach(button=>{

    button.onclick=function(){

        let id=this.dataset.id;

        fetch("toggle.php",{

            method:"POST",

            headers:{
                "Content-Type":"application/x-www-form-urlencoded"
            },

            body:"id="+id

        })

        .then(() => {

            this.closest("tr").querySelector("td:nth-child(4)").innerText =
            this.closest("tr").querySelector("td:nth-child(4)").innerText === "Active"
            ? "Inactive"
            : "Active";

        });

    }

});