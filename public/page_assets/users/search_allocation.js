import { addUserAllocationList, getUserAllocationList } from '../../page_assets/users/allocation_list.js';

let fromData = {};
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
          colCount: 3,
          items: [
            {
              dataField: 'name',
              label: {
                text: 'User name'
              }
            },
            
            {
                itemType: 'simple',
                template: function (data, itemElement) {
                  let successBtn = $(`<div id="textAreaContainer" class="m-1 mt-2">`).dxButton({
                    stylingMode: 'contained',
                    text: 'Search',
                    type: 'success',
                    name: 'Search',
                    elementAttr: {
                      class: 'btn dx-success-button'
                    },
                    validationGroup: 'searchFormValidationGroup',
                    useSubmitBehavior: true,
                    onClick(e) {
                      let validationGroup = e.validationGroup.validate();
                      if (validationGroup.isValid) {
                        let formData = form.option().formData;
                        getUserAllocationList(formData);
                      }
                    }
                  });

                  let resetBtn = $(`<div id="textAreaContainer" class="m-1 mt-2 ml-4">`).dxButton({
                    stylingMode: 'contained',
                    text: 'Reset',
                    type: 'danger',
                    name: 'Search',
                    elementAttr: {
                      class: 'btn dx-danger-button'
                    },
                    validationGroup: 'searchFormValidationGroup',
                    useSubmitBehavior: true,
                    onClick(e) {
                      let validationGroup = e.validationGroup.validate();
                      if (validationGroup.isValid) {
                        getUserAllocationList();
                      }
                    }
                  });

                  let addBtn = $(`<div id="textAreaContainer" class="m-1 mt-2 ml-4">`).dxButton({
                    stylingMode: 'contained',
                    horizontalAlignment: 'right',
                    text: 'Add New',
                    type: 'default',
                    name: 'create',
                    elementAttr: {
                      class: 'btn dx-primary-button'
                    },
                    useSubmitBehavior: true,
                    onClick(e) {
                        addUserAllocationList();
                    }
                  });
                  itemElement.append([successBtn, resetBtn, addBtn]);
                }
              }
          ]
        }       
      ]
    })
    .dxForm('instance');
}
