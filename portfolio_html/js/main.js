import TableCsv from "./TableCsv.js";

const tableRoot = document.querySelector ("#csvRoot");
const tableCsv = new TableCsv (tableRoot);

tableCsv.update([
  [4500, "dom", 200]
],["ID","Name","Age"] );
