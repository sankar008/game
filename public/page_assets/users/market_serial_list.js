export const getMarketSerialList = async () => {

  
    const dataJson = await axios({
      method: 'get',
      url: LIST_URL,
    });
  
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
      columns: [
        {
          dataField: 'id',
          width: '200px',
          caption: "Serial No",
          alignment: 'center',
          fixed: true,
        },
        {
          dataField: 'name',
          width: '200px',
          caption: "Market Name",
          alignment: 'center',
          fixed: true,
        },        
        {
            dataField: 'result',
            caption: 'Result',
            alignment: 'center'
        },  
        {
          dataField: 'start_time',
          caption: 'Start time',
          alignment: 'center'
      },
      {
        dataField: 'end_time',
        caption: 'End Time',
        alignment: 'center'
    },      
      ]
    });
  }  
  
  getMarketSerialList();