export const getUserList = async (formData = {}) => {
     
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
                  addUserList(data);
                }
              }
            })
          }
        },
        {
          dataField: 'name',
          width: '200px',
          caption: "Market Name",
          alignment: 'center',
        },
        {
          dataField: 'result',
          caption: 'Result',
          alignment: 'center',
        },
        {
          dataField: 'start_time_format',
          caption: 'Start Time',
          alignment: 'center',
        },
        {
          dataField: 'end_time_format',
          caption: 'End Time',
          alignment: 'center',
        },           
        {
            dataField: 'start_time',
            caption: 'Start Time',
            alignment: 'center',
            visible: false
          },
          {
            dataField: 'end_time',
            caption: 'End Time',
            alignment: 'center',
            visible: false
          } 
        
      ]
    });
  }
  
  
  export const addUserList = (data = {}) => {    
    
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
                      dataField: 'name',
                      caption: 'Market Name',
                      dataType: 'string',
                      alignment: 'left',
                      editorOptions: {
                        readOnly: false
                      },
                      label: {
                        text: 'Market Name'
                      },
                      validationRules: [
                        {
                          type: 'required',
                          message: 'Market Name is required'
                        }
                      ],
                    },
                   
                    {
                      dataField: 'result',
                      caption: 'Result',
                      dataType: 'string',
                      alignment: 'left',
                      editorOptions: {
                        readOnly: false
                      },
                      validationRules: [
                        {
                          type: 'required',
                          message: 'Result is required'
                        }
                      ],
                    },
                    
                    {
                      dataField: 'start_time',
                      caption: 'Start Time',
                      editorType: 'dxDateBox',
                      alignment: 'left',
                      editorOptions: {
                        readOnly: false,
                        type: 'time',
                      },
                      validationRules: [
                        {
                          type: 'required',
                          message: 'Start Time is required'
                        }
                      ],
                    },
                  
                    {
                      dataField: 'end_time',
                      caption: 'End Time',
                      dataType: 'time',
                      editorType: 'dxDateBox',
                      alignment: 'left',
                      editorOptions: {
                        readOnly: false,
                        type: 'time',
                      },
                      validationRules: [
                        {
                          type: 'required',
                          message: 'End Time is required'
                        }
                      ],
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
                           
                            let URL = UPDATE_URL
  
                           
                            axios
                              .post(URL, submittedFormData)
                              .then((response) => {
                                var result = response.data;
                                toastr.success(result.message);
                                popup.hide();
                                $('#preloader').toggleClass('d-none');
                                getUserList();
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
        title: 'Add New Result',
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
  
  
  
  
  getUserList();