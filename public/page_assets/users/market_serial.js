import { getMarketSerialList } from '../../page_assets/users/market_serial_list.js';

let fromData = {'market_id': SERIAL_NO};
loadSearchForm(fromData); //load search form

function loadSearchForm(formData) {
  var form = $('#basicInformationSearchForm')
    .dxForm({
      formData,
      showColonAfterLabel: false,
      labelMode: 'floating',
      validationGroup: 'searchFormValidationGroup',
      onContentReady: (e) => {},
      onFieldDataChanged: (e) => {       
      },
      items: [
        {
          itemType: 'group',
          colCount: 2,
          items: [
            {
              dataField: 'market_id',
              validationRules: [
                {
                  type: 'required',
                  message: 'Name is required'
                }
              ],
              label: {
                text: 'Market Serial no'
              }
            },
            {
                itemType: 'simple',
                template: function (data, itemElement) {  
                  
                  let addBtn = $(`<div id="textAreaContainer" class="m-1 mt-2 ml-4">`).dxButton({
                    stylingMode: 'contained',
                    horizontalAlignment: 'right',
                    text: 'Submit',
                    type: 'success',
                    name: 'create',
                    elementAttr: {
                      class: 'btn dx-success-button'
                    },
                    useSubmitBehavior: true,
                    onClick(e) {
                      let formData = form.option().formData;                      
                      axios
                        .post(ADD_URL, formData)
                        .then((response) => {
                          var result = response.data;
                          toastr.success(result.message);
                          getMarketSerialList();
                          $('#preloader').toggleClass('d-none');
                        })
                        .catch((error) => {
                          $('#preloader').toggleClass('d-none');
                          toastr.error(error.response.data.message);
                        });

                    }
                  });
                  itemElement.append([addBtn]);
                }
              }
          ]
        }       
      ]
    })
    .dxForm('instance');
}
