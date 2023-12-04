export const getUserList = async (formData = {}) => {
  var url = 'market-list';
  // const dataJson = await axios({
  //   method: 'get',
  //   url: url,
  // });

  const dataJson = await axios.get(url, { params: formData })

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
        caption: "Market Name"
      },
      {
        dataField: 'result',
        caption: 'Result',
      },
      {
        dataField: 'start_time_format',
        caption: 'Start Time',
      },
      {
        dataField: 'end_time_format',
        caption: 'End Time',
      },
      {
        dataField: 'is_monday',
        caption: 'Monday',
      },
      {
        dataField: 'is_tuesday',
        caption: 'Tuesday',
      },
      {
        dataField: 'is_thusday',
        caption: 'Thusday',
      },
      {
        dataField: 'is_friday',
        caption: 'Friday',
      },{
        dataField: 'is_saturday',
        caption: 'Saturday',
      },
      {
        dataField: 'is_sunday',
        caption: 'Sunday',
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
                    dataField: 'name_color',
                    caption: 'Color',
                    editorType: 'dxColorBox',
                    dataType: 'string',
                    alignment: 'left',
                    editorOptions: {
                      readOnly: false,
                      value: '#ffffff',
                    }
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
                    dataField: 'result_color',
                    caption: 'Color',
                    editorType: 'dxColorBox',
                    dataType: 'string',
                    alignment: 'left',
                    editorOptions: {
                      readOnly: false,
                      value: '#ffffff',
                    }
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
                    dataField: 'start_time_color',
                    caption: 'Color',
                    dataType: 'string',
                    editorType: 'dxColorBox',
                    alignment: 'left',
                    editorOptions: {
                      readOnly: false,
                      value: '#ffffff',
                    }
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
                  {
                    dataField: 'end_time_color',
                    caption: 'Color',
                    editorType: 'dxColorBox',
                    dataType: 'string',
                    alignment: 'left',
                    editorOptions: {
                      readOnly: false,
                      value: '#ffffff',
                    }
                  },
                  {
                    dataField: 'after_time',
                    editorType: 'dxNumberBox',
                    caption: 'After',
                    alignment: 'left',          
                  },
                  {
                    dataField: 'before_time',
                    editorType: 'dxNumberBox',
                    caption: 'Before',
                    alignment: 'left',
                  },
                ]
              },

              {
                itemType: 'group',
                colCount: 4,
                items: [
                  {
                    dataField: 'is_monday',
                    editorType: 'dxSelectBox',
                    editorOptions: {
                      items: ['Yes', 'No'],
                      searchEnabled: true,
                    },
                    label: {
                      text: 'Monday'
                    },
                  },
                  {
                    dataField: 'is_tuesday',
                    editorType: 'dxSelectBox',
                    editorOptions: {
                      items: ['Yes', 'No'],
                      searchEnabled: true,
                    },
                    label: {
                      text: 'Tuesday'
                    },
                  },
                  {
                    dataField: 'is_wednesday',
                    editorType: 'dxSelectBox',
                    editorOptions: {
                      items: ['Yes', 'No'],
                      searchEnabled: true,
                    },
                    label: {
                      text: 'Wednesday'
                    },
                  },
                  {
                    dataField: 'is_thusday',
                    editorType: 'dxSelectBox',
                    editorOptions: {
                      items: ['Yes', 'No'],
                      searchEnabled: true,
                    },
                    label: {
                      text: 'Thusday'
                    },
                  },
                  {
                    dataField: 'is_friday',
                    editorType: 'dxSelectBox',
                    editorOptions: {
                      items: ['Yes', 'No'],
                      searchEnabled: true,
                    },
                    label: {
                      text: 'Friday'
                    },
                  },
                  {
                    dataField: 'is_saturday',
                    editorType: 'dxSelectBox',
                    editorOptions: {
                      items: ['Yes', 'No'],
                      searchEnabled: true,
                    },
                    label: {
                      text: 'Saturday'
                    },
                  },
                  {
                    dataField: 'is_sunday',
                    editorType: 'dxSelectBox',
                    editorOptions: {
                      items: ['Yes', 'No'],
                      searchEnabled: true,
                    },
                    label: {
                      text: 'Sunday'
                    },
                  },

                  {
                    dataField: 'background_color',
                    caption: 'Color',
                    editorType: 'dxColorBox',
                    dataType: 'string',
                    alignment: 'left',
                    editorOptions: {
                      readOnly: false,
                      value: '#ffffff',
                    }
                  }
                ]
              },

              {
                itemType: 'group',
                colCount: 1,
                items: [
                  {
                    dataField: 'details',
                    caption: 'Market Details',
                    editorType: 'dxTextArea',
                    dataType: 'string',
                    alignment: 'left',
                    editorOptions: {
                      readOnly: false
                    }
                  }
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
      title: 'Add New Market',
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