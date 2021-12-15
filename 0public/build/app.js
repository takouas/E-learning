"use strict";
(self["webpackChunkTestProjet_E_Learning_video"] = self["webpackChunkTestProjet_E_Learning_video"] || []).push([["app"],{

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react_dom__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react-dom */ "./node_modules/react-dom/index.js");
/* harmony import */ var _js_Chat__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./js/Chat */ "./assets/js/Chat.js");



/*import '../assets/styles/app.css'*/

react_dom__WEBPACK_IMPORTED_MODULE_1__.render( /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement(_js_Chat__WEBPACK_IMPORTED_MODULE_2__["default"], null), document.getElementById("root"));

/***/ }),

/***/ "./assets/js/Chat.js":
/*!***************************!*\
  !*** ./assets/js/Chat.js ***!
  \***************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.array.is-array.js */ "./node_modules/core-js/modules/es.array.is-array.js");
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.array.slice.js */ "./node_modules/core-js/modules/es.array.slice.js");
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.function.name.js */ "./node_modules/core-js/modules/es.function.name.js");
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.array.from.js */ "./node_modules/core-js/modules/es.array.from.js");
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! axios */ "./node_modules/axios/index.js");
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(axios__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var twilio_video__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! twilio-video */ "./node_modules/twilio-video/es5/index.js");
/* harmony import */ var twilio_video__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(twilio_video__WEBPACK_IMPORTED_MODULE_16__);















function _slicedToArray(arr, i) { return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _unsupportedIterableToArray(arr, i) || _nonIterableRest(); }

function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function _iterableToArrayLimit(arr, i) { var _i = arr == null ? null : typeof Symbol !== "undefined" && arr[Symbol.iterator] || arr["@@iterator"]; if (_i == null) return; var _arr = []; var _n = true; var _d = false; var _s, _e; try { for (_i = _i.call(arr); !(_n = (_s = _i.next()).done); _n = true) { _arr.push(_s.value); if (i && _arr.length === i) break; } } catch (err) { _d = true; _e = err; } finally { try { if (!_n && _i["return"] != null) _i["return"](); } finally { if (_d) throw _e; } } return _arr; }

function _arrayWithHoles(arr) { if (Array.isArray(arr)) return arr; }





var Chat = function Chat() {
  var _useState = (0,react__WEBPACK_IMPORTED_MODULE_14__.useState)(''),
      _useState2 = _slicedToArray(_useState, 2),
      roomName = _useState2[0],
      setRoomName = _useState2[1];

  var _useState3 = (0,react__WEBPACK_IMPORTED_MODULE_14__.useState)(false),
      _useState4 = _slicedToArray(_useState3, 2),
      hasJoinedRoom = _useState4[0],
      setHasJoinedRoom = _useState4[1];

  var joinChat = function joinChat(event) {
    event.preventDefault();

    if (roomName) {
      axios__WEBPACK_IMPORTED_MODULE_15___default().post('/access_token', {
        roomName: roomName
      }).then(function (response) {
        connectToRoom(response.data.token);
        setHasJoinedRoom(true);
        setRoomName('');
      })["catch"](function (error) {
        console.log(error);
      });
    } else {
      alert("You need to enter a room name");
    }
  };

  var connectToRoom = function connectToRoom(token) {
    var connect = (twilio_video__WEBPACK_IMPORTED_MODULE_16___default().connect),
        createLocalVideoTrack = (twilio_video__WEBPACK_IMPORTED_MODULE_16___default().createLocalVideoTrack);
    var connectOption = {
      name: roomName
    };
    connect(token, connectOption).then(function (room) {
      console.log("Successfully joined a Room: ".concat(room));
      var videoChatWindow = document.getElementById('video-chat-window');
      createLocalVideoTrack().then(function (track) {
        videoChatWindow.appendChild(track.attach());
      });
      room.on('participantConnected', function (participant) {
        console.log("Participant \"".concat(participant.identity, "\" connected"));
        participant.tracks.forEach(function (publication) {
          if (publication.isSubscribed) {
            var track = publication.track;
            videoChatWindow.appendChild(track.attach());
          }
        });
        participant.on('trackSubscribed', function (track) {
          videoChatWindow.appendChild(track.attach());
        });
      });
    }, function (error) {
      console.error("Unable to connect to Room: ".concat(error.message));
    });
  };

  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_14__.createElement("div", {
    className: "container"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_14__.createElement("div", {
    className: "col-md-12"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_14__.createElement("h1", {
    className: "text-title"
  }, "Symfony React Video Chat")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_14__.createElement("div", {
    className: "col-md-6"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_14__.createElement("div", {
    className: "mb-5 mt-5"
  }, !hasJoinedRoom && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_14__.createElement("form", {
    className: "form-inline",
    onSubmit: joinChat
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_14__.createElement("input", {
    type: "text",
    name: 'roomName',
    className: "form-control",
    id: "roomName",
    placeholder: "Enter a room name",
    value: roomName,
    onChange: function onChange(event) {
      return setRoomName(event.target.value);
    }
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_14__.createElement("button", {
    type: "submit",
    className: "btn btn-primary"
  }, "Join Room"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_14__.createElement("div", {
    id: "video-chat-window"
  })));
};

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Chat);

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_axios_index_js-node_modules_core-js_modules_es_array_for-each_js-node_mo-39ff94"], () => (__webpack_exec__("./assets/app.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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RCxLQUFLLENBQUNFLE1BQU4sRUFBNUI7QUFDSCxTQUZEO0FBR0gsT0FiRDtBQWNILEtBeEJELEVBd0JHLFVBQUFaLEtBQUssRUFBSTtBQUNSQyxNQUFBQSxPQUFPLENBQUNELEtBQVIsc0NBQTRDQSxLQUFLLENBQUNvQixPQUFsRDtBQUNILEtBMUJEO0FBMkJILEdBaENEOztBQW1DQSxzQkFDSTtBQUFLLGFBQVMsRUFBQztBQUFmLGtCQUNJO0FBQUssYUFBUyxFQUFFO0FBQWhCLGtCQUNJO0FBQUksYUFBUyxFQUFDO0FBQWQsZ0NBREosQ0FESixlQUtJO0FBQUssYUFBUyxFQUFDO0FBQWYsa0JBQ0k7QUFBSyxhQUFTLEVBQUU7QUFBaEIsS0FDSyxDQUFDL0IsYUFBRCxpQkFDRztBQUFNLGFBQVMsRUFBQyxhQUFoQjtBQUE4QixZQUFRLEVBQUVFO0FBQXhDLGtCQUNJO0FBQU8sUUFBSSxFQUFDLE1BQVo7QUFBbUIsUUFBSSxFQUFFLFVBQXpCO0FBQXFDLGFBQVMsRUFBRSxjQUFoRDtBQUFnRSxNQUFFLEVBQUMsVUFBbkU7QUFDTyxlQUFXLEVBQUMsbUJBRG5CO0FBQ3VDLFNBQUssRUFBRUosUUFEOUM7QUFDd0QsWUFBUSxFQUFFLGtCQUFBSyxLQUFLO0FBQUEsYUFBSUosV0FBVyxDQUFDSSxLQUFLLENBQUM2QixNQUFOLENBQWFDLEtBQWQsQ0FBZjtBQUFBO0FBRHZFLElBREosZUFJUTtBQUFRLFFBQUksRUFBQyxRQUFiO0FBQXNCLGFBQVMsRUFBQztBQUFoQyxpQkFKUixDQUZSLENBREosZUFhSTtBQUFLLE1BQUUsRUFBQztBQUFSLElBYkosQ0FMSixDQURKO0FBdUJILENBN0VEOztBQStFQSxpRUFBZTFDLElBQWYiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9UZXN0UHJvamV0LUUtTGVhcm5pbmctdmlkZW8vLi9hc3NldHMvYXBwLmpzIiwid2VicGFjazovL1Rlc3RQcm9qZXQtRS1MZWFybmluZy12aWRlby8uL2Fzc2V0cy9qcy9DaGF0LmpzIl0sInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBSZWFjdCwge0NvbXBvbmVudH0gZnJvbSAncmVhY3QnO1xuaW1wb3J0IFJlYWN0RE9NIGZyb20gXCJyZWFjdC1kb21cIjtcbmltcG9ydCBDaGF0IGZyb20gJy4vanMvQ2hhdCc7XG4vKmltcG9ydCAnLi4vYXNzZXRzL3N0eWxlcy9hcHAuY3NzJyovXG5cbiBSZWFjdERPTS5yZW5kZXIoPENoYXQvPiwgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJyb290XCIpKTsiLCJpbXBvcnQgUmVhY3QsIHsgdXNlU3RhdGUgfSBmcm9tIFwicmVhY3RcIjtcclxuaW1wb3J0IGF4aW9zIGZyb20gXCJheGlvc1wiO1xyXG5pbXBvcnQgVmlkZW8gZnJvbSBcInR3aWxpby12aWRlb1wiO1xyXG5cclxuY29uc3QgQ2hhdCA9ICgpID0+IHtcclxuICAgIGNvbnN0IFtyb29tTmFtZSwgc2V0Um9vbU5hbWVdID0gdXNlU3RhdGUoJycpO1xyXG4gICAgY29uc3QgW2hhc0pvaW5lZFJvb20sIHNldEhhc0pvaW5lZFJvb21dID0gdXNlU3RhdGUoZmFsc2UpO1xyXG5cclxuICAgIGNvbnN0IGpvaW5DaGF0ID0gZXZlbnQgPT4ge1xyXG4gICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcclxuICAgICAgaWYgKHJvb21OYW1lKSB7XHJcbiAgICAgICAgICAgIGF4aW9zLnBvc3QoJy9hY2Nlc3NfdG9rZW4nLCB7IHJvb21OYW1lIH0sICkudGhlbigocmVzcG9uc2UpID0+IHtcclxuICAgICAgICAgICAgICAgIGNvbm5lY3RUb1Jvb20ocmVzcG9uc2UuZGF0YS50b2tlbik7XHJcbiAgICAgICAgICAgICAgICBzZXRIYXNKb2luZWRSb29tKHRydWUpO1xyXG4gICAgICAgICAgICAgICAgc2V0Um9vbU5hbWUoJycpO1xyXG5cclxuICAgICAgICAgICAgfSkuY2F0Y2goKGVycm9yKSA9PiB7XHJcbiAgICAgICAgICAgICAgICBjb25zb2xlLmxvZyhlcnJvcik7XHJcbiAgICAgICAgICAgIH0pXHJcbiAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgYWxlcnQoXCJZb3UgbmVlZCB0byBlbnRlciBhIHJvb20gbmFtZVwiKVxyXG4gICAgICAgIH1cclxuICAgIH07XHJcbiAgICBjb25zdCBjb25uZWN0VG9Sb29tID0gKHRva2VuKSA9PiB7XHJcbiAgICAgICAgY29uc3QgeyBjb25uZWN0LCBjcmVhdGVMb2NhbFZpZGVvVHJhY2sgfSA9IFZpZGVvO1xyXG5cclxuICAgICAgICBsZXQgY29ubmVjdE9wdGlvbiA9IHsgbmFtZTogcm9vbU5hbWUgfTtcclxuXHJcbiAgICAgICAgY29ubmVjdCggdG9rZW4sIGNvbm5lY3RPcHRpb24pLnRoZW4ocm9vbSA9PiB7XHJcblxyXG4gICAgICAgICAgICBjb25zb2xlLmxvZyhgU3VjY2Vzc2Z1bGx5IGpvaW5lZCBhIFJvb206ICR7cm9vbX1gKTtcclxuXHJcbiAgICAgICAgICAgIGNvbnN0IHZpZGVvQ2hhdFdpbmRvdyA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCd2aWRlby1jaGF0LXdpbmRvdycpO1xyXG5cclxuICAgICAgICAgICAgY3JlYXRlTG9jYWxWaWRlb1RyYWNrKCkudGhlbih0cmFjayA9PiB7XHJcbiAgICAgICAgICAgICAgICB2aWRlb0NoYXRXaW5kb3cuYXBwZW5kQ2hpbGQodHJhY2suYXR0YWNoKCkpO1xyXG4gICAgICAgICAgICB9KTtcclxuXHJcbiAgICAgICAgICAgIHJvb20ub24oJ3BhcnRpY2lwYW50Q29ubmVjdGVkJywgcGFydGljaXBhbnQgPT4ge1xyXG4gICAgICAgICAgICAgICAgY29uc29sZS5sb2coYFBhcnRpY2lwYW50IFwiJHtwYXJ0aWNpcGFudC5pZGVudGl0eX1cIiBjb25uZWN0ZWRgKTtcclxuXHJcbiAgICAgICAgICAgICAgICBwYXJ0aWNpcGFudC50cmFja3MuZm9yRWFjaChwdWJsaWNhdGlvbiA9PiB7XHJcbiAgICAgICAgICAgICAgICAgICAgaWYgKHB1YmxpY2F0aW9uLmlzU3Vic2NyaWJlZCkge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICBjb25zdCB0cmFjayA9IHB1YmxpY2F0aW9uLnRyYWNrO1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB2aWRlb0NoYXRXaW5kb3cuYXBwZW5kQ2hpbGQodHJhY2suYXR0YWNoKCkpO1xyXG4gICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgIH0pO1xyXG5cclxuICAgICAgICAgICAgICAgIHBhcnRpY2lwYW50Lm9uKCd0cmFja1N1YnNjcmliZWQnLCB0cmFjayA9PiB7XHJcbiAgICAgICAgICAgICAgICAgICAgdmlkZW9DaGF0V2luZG93LmFwcGVuZENoaWxkKHRyYWNrLmF0dGFjaCgpKTtcclxuICAgICAgICAgICAgICAgIH0pO1xyXG4gICAgICAgICAgICB9KTtcclxuICAgICAgICB9LCBlcnJvciA9PiB7XHJcbiAgICAgICAgICAgIGNvbnNvbGUuZXJyb3IoYFVuYWJsZSB0byBjb25uZWN0IHRvIFJvb206ICR7ZXJyb3IubWVzc2FnZX1gKTtcclxuICAgICAgICB9KTtcclxuICAgIH07XHJcblxyXG5cclxuICAgIHJldHVybihcclxuICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImNvbnRhaW5lclwiPlxyXG4gICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT17XCJjb2wtbWQtMTJcIn0+XHJcbiAgICAgICAgICAgICAgICA8aDEgY2xhc3NOYW1lPVwidGV4dC10aXRsZVwiPlN5bWZvbnkgUmVhY3QgVmlkZW8gQ2hhdDwvaDE+XHJcbiAgICAgICAgICAgIDwvZGl2PlxyXG5cclxuICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjb2wtbWQtNlwiPlxyXG4gICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9e1wibWItNSBtdC01XCJ9PlxyXG4gICAgICAgICAgICAgICAgICAgIHshaGFzSm9pbmVkUm9vbSAmJiAoXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIDxmb3JtIGNsYXNzTmFtZT1cImZvcm0taW5saW5lXCIgb25TdWJtaXQ9e2pvaW5DaGF0fT5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpbnB1dCB0eXBlPVwidGV4dFwiIG5hbWU9eydyb29tTmFtZSd9IGNsYXNzTmFtZT17XCJmb3JtLWNvbnRyb2xcIn0gaWQ9XCJyb29tTmFtZVwiXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcGxhY2Vob2xkZXI9XCJFbnRlciBhIHJvb20gbmFtZVwiIHZhbHVlPXtyb29tTmFtZX0gb25DaGFuZ2U9e2V2ZW50ID0+IHNldFJvb21OYW1lKGV2ZW50LnRhcmdldC52YWx1ZSl9Lz5cclxuXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJ1dHRvbiB0eXBlPVwic3VibWl0XCIgY2xhc3NOYW1lPVwiYnRuIGJ0bi1wcmltYXJ5XCI+Sm9pbiBSb29tPC9idXR0b24+XHJcblxyXG4gICAgICAgICAgICAgICAgICAgICAgICA8L2Zvcm0+XHJcbiAgICAgICAgICAgICAgICAgICAgKX1cclxuXHJcbiAgICAgICAgICAgICAgICA8L2Rpdj5cclxuICAgICAgICAgICAgICAgIDxkaXYgaWQ9XCJ2aWRlby1jaGF0LXdpbmRvd1wiPjwvZGl2PlxyXG4gICAgICAgICAgICA8L2Rpdj5cclxuICAgICAgICA8L2Rpdj5cclxuICAgIClcclxufTtcclxuXHJcbmV4cG9ydCBkZWZhdWx0IENoYXQ7XHJcbiJdLCJuYW1lcyI6WyJSZWFjdCIsIkNvbXBvbmVudCIsIlJlYWN0RE9NIiwiQ2hhdCIsInJlbmRlciIsImRvY3VtZW50IiwiZ2V0RWxlbWVudEJ5SWQiLCJ1c2VTdGF0ZSIsImF4aW9zIiwiVmlkZW8iLCJyb29tTmFtZSIsInNldFJvb21OYW1lIiwiaGFzSm9pbmVkUm9vbSIsInNldEhhc0pvaW5lZFJvb20iLCJqb2luQ2hhdCIsImV2ZW50IiwicHJldmVudERlZmF1bHQiLCJwb3N0IiwidGhlbiIsInJlc3BvbnNlIiwiY29ubmVjdFRvUm9vbSIsImRhdGEiLCJ0b2tlbiIsImVycm9yIiwiY29uc29sZSIsImxvZyIsImFsZXJ0IiwiY29ubmVjdCIsImNyZWF0ZUxvY2FsVmlkZW9UcmFjayIsImNvbm5lY3RPcHRpb24iLCJuYW1lIiwicm9vbSIsInZpZGVvQ2hhdFdpbmRvdyIsInRyYWNrIiwiYXBwZW5kQ2hpbGQiLCJhdHRhY2giLCJvbiIsInBhcnRpY2lwYW50IiwiaWRlbnRpdHkiLCJ0cmFja3MiLCJmb3JFYWNoIiwicHVibGljYXRpb24iLCJpc1N1YnNjcmliZWQiLCJtZXNzYWdlIiwidGFyZ2V0IiwidmFsdWUiXSwic291cmNlUm9vdCI6IiJ9