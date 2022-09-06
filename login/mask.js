function mask(mascaraInput) {

    const tamanhoInputTelefone = document.getElementById('telefone').maxLength
        let valorInputTelefone = document.getElementById('telefone').value
        const mascaraTelefone = {
            Telefone : valorInputTelefone.replace(/[^\d]/g, "").replace(/^(\d{2})(\d{1})(\d{4})(\d{4}).*/, '($1) $2 $3-$4' )
        };
    
        if(valorInputTelefone.length == tamanhoInputTelefone){
            document.getElementById('telefone').value = mascaraTelefone[mascaraInput]
        }
    }