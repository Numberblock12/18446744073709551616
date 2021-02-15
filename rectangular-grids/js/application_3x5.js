// Wait till the browser is ready to render the game (avoids glitches)
window.requestAnimationFrame(function () {
  new GameManager({ 'x': 3, 'y': 5 }, KeyboardInputManager, HTMLActuator, LocalStorageManager);
});
