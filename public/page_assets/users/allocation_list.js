export const getUserAllocationList = async (formData = {}) => {
    
  
    const dataJson = await axios.get(LIST_URL, { params: formData })
  
    var dataGrid = $("#gridContainer").dxDataGrid({
      dataSource: dataJson.data.data,
      repaintChangesOnly: true,
      remoteOperations: true,
      showBorders: true,
      showRowLines: true,
      allowColumnReordering: false,
      allowColumnResizing: false,
      allowUpdating: true,
      columnAutoWidth: true,
      showBorders: true,
      rowAlternationEnabled: true,
      sorting: 'none',
      hoverStateEnabled: true,
      paging: {
        enabled: true,
        pageSize: 20
      },
      pager: {
        showInfo: true
      },
      scrolling: {
        scrollByContent: true
      },
      loadPanel: {
        //   indicatorSrc: `${ASSET_URL}/assets/images/loader4.gif`,
        //   text: 'Loading...',
        //   showPane: true
      },
      columnFixing: {
        enabled: true
      },
      selection: {
        mode: 'none',
      },
      onSelectionChanged(selectedItems) {
  
      },
      wordWrapEnabled: true,
      columns: [
        {
          dataField: 'rowId',
          width: 80,
          caption: "Id",
          alignment: 'center',
          fixed: true,
          cellTemplate: function (container, options) {
            let data = options.data;
            let accountName = data.id;
            $('<div>').appendTo(container).dxMenu({
              items: [
                {
                  text: accountName,
                  items: [
                    { text: "Edit", icon: 'fas fa-eye text-info', value: '', slug: 'account_edit' }
                  ]
                }
              ],
              showFirstSubmenuMode: 'onHover',
              hideSubmenuOnMouseLeave: true,
              onContentReady: function (e) {
                e.element.find('.dx-menu-item-content').addClass('dx-menu-item-content-custom-text');
              },
              onItemClick: function (e) {
                e.element;
                if (e.itemData.slug == 'account_edit') {
                    addUserAllocationList(data);
                }
              }
            })
          }
        },
        {
          dataField: 'user_id',
          caption: "User Name",
          alignment: 'center'
        },
        {
            dataField: 'market_id',
            caption: "Market Name",
            alignment: 'center'
          },
      ]
    });
  }
  
  
  export const addUserAllocationList = (data = {}) => {    
  
     var popup = $('#formPopup')
      .dxPopup({
        contentTemplate: (contentElement) => {
          var formContainer = $('<div id="form">');
          const form = formContainer
            .dxForm({
              formData: { ...data, ...{ 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } },
              showColonAfterLabel: false,
              showValidationSummary: true,
              labelMode: 'floating',
              validationGroup: 'detailsPopupFormValidationGroup',
              onContentReady: (e) => {
                const element = e.component.value;
                console.log(element);
              },
              onFieldDataChanged: (e) => { },
              items: [
                {
                  itemType: 'group',
                  colCount: 2,
                  items: [
                    {
                        dataField: 'user_id',
                        editorType: 'dxSelectBox',
                        editorOptions: {
                          items: User,
                          valueExpr: 'id',
                          displayExpr: 'name',
                          searchEnabled: true,
                        },
                        label: {
                          text: 'User name'
                        },
                    },
                  
                    {
                        dataField: 'market_id',
                        editorType: 'dxSelectBox',
                        editorOptions: {
                          items: Market,
                          valueExpr: 'id',
                          displayExpr: 'name',
                          searchEnabled: true,
                        },
                        label: {
                          text: 'Market name'
                        },
                    },
                  ]
                },
  
                {
                  itemType: 'group',
                  colCount: 1,
                  items: [
                    {
                      itemType: 'button',
                      horizontalAlignment: 'right',
                      buttonOptions: {
                        text: 'Submit',
                        type: 'success',
                        elementAttr: {
                          class: 'btn dx-success-button'
                        },
                        useSubmitBehavior: true,
                        validationGroup: 'detailsPopupFormValidationGroup',
                        onClick(e) {
                          let gridInstance = $('#gridContainer').dxDataGrid('instance');
                          $('#loader').toggleClass('d-none');
                          let validationGroup = e.validationGroup.validate();
  
                          if (validationGroup.isValid) {
                            $('#preloader').toggleClass('d-none');
                            let submittedFormData = form.option().formData;
                           
                            let URL = submittedFormData.id?UPDATE_URL:ADD_URL
  
                           
                            axios
                              .post(URL, submittedFormData)
                              .then((response) => {
                                var result = response.data;
                                toastr.success(result.message);
                                popup.hide();
                                $('#preloader').toggleClass('d-none');
                                getUserAllocationList();
                              })
                              .catch((error) => {
                                $('#preloader').toggleClass('d-none');
                                toastr.error(error.response.data.message);
                              });
                          }
                        }
                      }
                    }
                  ]
                }
              ]
            })
            .dxForm('instance');
          contentElement.append(formContainer);
        },
        wrapperAttr: {
          id: 'devexpress_popup'
        },
        height: 'auto',
        shading: true,
        width: '800px',
        container: '.dx-viewport',
        showTitle: true,
        title: 'Add User Allocation',
        visible: false,
        dragEnabled: false,
        hideOnOutsideClick: false,
        showCloseButton: true,
        deferRendering: true,
        position: {
          at: 'center',
          my: 'center',
          of: 'center',
          collision: 'fit'
        }
      })
      .dxPopup('instance');
    popup.show();
  }
  
  
  
  
  getUserAllocationList();