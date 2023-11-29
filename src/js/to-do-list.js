/*
|--------------------------------------------------
| A To Do List to keep track of things I need to do or get back to
|--------------------------------------------------
*/

const toDoList = [
  // `______COPY_THIS______`,
  `This will be output in the console.log`,
  // `___`,
  // `___`,
  // `___`,
  // `___`,
  // `___`,

  // `___ All BELOW IS COMPLETE 🎉 ___`,
  // `Completed Task`,
];

if (toDoList.length > 0) {
  console.log(
    `----------
----
---
--
`
  );

  toDoList.forEach((item) => {
    console.log(item);
  });

  console.log(
    `--
---
----
----------
`
  );
}
