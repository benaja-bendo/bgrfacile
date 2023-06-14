import './bootstrap';
import '../css/site.css';
import '../css/show-course.css';

import Alpine from "alpinejs";
//import EditorJS from '@editorjs/editorjs';
//import Header from '@editorjs/header';


window.Alpine = Alpine;
Alpine.start();

// const editor = new EditorJS({
//     holder: 'editorjs',
//     tools: {
//         header: {
//             class: Header,
//             shortcut: 'CMD+SHIFT+H',
//         }
//
//     },
//     onReady: () => {
//         console.log('Editor.js is ready to work!')
//     },
//     data: {
//         blocks: [
//             {
//                 type: "header",
//                 data: {
//                     text: "Editor.js",
//                     level: 2
//                 }
//             }
//         ],
//         version: "2.15.0",
//         time: 1623167229091
//     },
//     readOnly: true,
// });
