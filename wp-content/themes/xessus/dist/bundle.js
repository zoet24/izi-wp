/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/scripts/index.js":
/*!******************************!*\
  !*** ./src/scripts/index.js ***!
  \******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _styles_style_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../styles/style.scss */ \"./src/styles/style.scss\");\n/* harmony import */ var _mixins_hamburger__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./mixins/hamburger */ \"./src/scripts/mixins/hamburger.js\");\n/* harmony import */ var _mixins_hamburger__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_mixins_hamburger__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _mixins_subnav__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./mixins/subnav */ \"./src/scripts/mixins/subnav.js\");\n/* harmony import */ var _mixins_subnav__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_mixins_subnav__WEBPACK_IMPORTED_MODULE_2__);\n\n\n\n\n//# sourceURL=webpack://zoepix/./src/scripts/index.js?");

/***/ }),

/***/ "./src/scripts/mixins/hamburger.js":
/*!*****************************************!*\
  !*** ./src/scripts/mixins/hamburger.js ***!
  \*****************************************/
/***/ (() => {

eval("document.addEventListener('click', function (e) {\n  if (!e.target.closest('.hamburger')) return;\n  var hamburger = e.target.closest('.hamburger');\n  var navbar = e.target.closest('.header__container').querySelector('.header__navbar');\n  hamburger.classList[hamburger.matches('.hamburger--is-active') ? 'remove' : 'add']('hamburger--is-active');\n  navbar.classList[navbar.matches('.header__navbar--is-active') ? 'remove' : 'add']('header__navbar--is-active');\n  document.body.classList[document.body.matches('.menu-is-open') ? 'remove' : 'add']('menu-is-open');\n});\n\n//# sourceURL=webpack://zoepix/./src/scripts/mixins/hamburger.js?");

/***/ }),

/***/ "./src/scripts/mixins/subnav.js":
/*!**************************************!*\
  !*** ./src/scripts/mixins/subnav.js ***!
  \**************************************/
/***/ (() => {

eval("document.addEventListener('click', function (e) {\n  if (!e.target.closest('.header__navbar--link--haschildren')) return;\n  var subnav = e.target.closest('.header__navbar--link--haschildren');\n  var subnavArrow = subnav.querySelector('.header__navbar--arrow');\n  var subnavMenu = subnav.querySelector('.header__navbar--subnav');\n  subnavArrow.classList[subnavArrow.matches('.header__navbar--arrow--is-active') ? 'remove' : 'add']('header__navbar--arrow--is-active');\n  subnavMenu.classList[subnavMenu.matches('.header__navbar--subnav--is-active') ? 'remove' : 'add']('header__navbar--subnav--is-active');\n});\n\n//# sourceURL=webpack://zoepix/./src/scripts/mixins/subnav.js?");

/***/ }),

/***/ "./src/styles/style.scss":
/*!*******************************!*\
  !*** ./src/styles/style.scss ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://zoepix/./src/styles/style.scss?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./src/scripts/index.js");
/******/ 	
/******/ })()
;