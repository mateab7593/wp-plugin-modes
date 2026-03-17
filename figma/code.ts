const UI_WIDTH = 400;
const UI_HEIGHT = 480;

figma.showUI(__html__, { width: UI_WIDTH, height: UI_HEIGHT });

figma.ui.onmessage = async (msg: { type: string; [key: string]: unknown }) => {
  if (msg.type === 'close') {
    figma.closePlugin();
  }
};

figma.on('close', () => {
  figma.closePlugin();
});
