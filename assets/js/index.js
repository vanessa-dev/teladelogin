//configura mascara telefone
function configuraMascaraTelefone(){
    let SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
      },
      spOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
          }
      };
      $("#telefone").mask(SPMaskBehavior, spOptions);
}
function configuraMascaraTelefone(){
  let SPMaskBehavior = function (val) {
      return val.replace(/\D/g, '').length === 11 ? '000.000.000-00' : '000.000.000-00';
    },
    spOptions = {
      onKeyPress: function(val, e, field, options) {
          field.mask(SPMaskBehavior.apply({}, arguments), options);
        }
    };
    $("#cpf").mask(SPMaskBehavior, spOptions);
}