export const gradients = {
  background: ['#FFFFFF', '#F4F4F5', '#EEF2FF'],
  backgroundPage: ['#F4F6FF', '#EEF2FF'],

  hero: ['#05053D', '#241175', '#312C85'],
  brand: ['#05053D', '#241175', '#312C85'],
  primary: ['#241175', '#312C85'],

  fromPrimary0: ['#05053D', '#3131F1'],
  fromPrimary1: ['#00F9F9', '#38B3D9'],
  fromPrimary2: ['#241175', '#9179F9'],
  fromPrimary3: ['#FC3AB2', '#FF1859'],
  fromPrimary4: ['#14B8A6', '#0D9488'],
  fromPrimary5: ['#3B82F6', '#1955B6'],
  fromPrimary6: ['#EA580C', '#A03E0C'],
  fromPrimary7: ['#65A30D', '#3F6508'],
  fromPrimary8: ['#475569', '#52525B'],

  dashboardViews: ['#1E1B4B', '#4338CA'],
  dashboardVisitors: ['#14B8A6', '#0D9488'],
  dashboardCalls: ['#3B82F6', '#1955B6'],
  dashboardForms: ['#312C85', '#241175'],

  brandGradient: ['#FC3AB2', '#05053D'],
  accentIndigo: ['#3730A3', '#6366F1'],

  avatarBorder: ['#FC3AB2', '#00D4D4', '#312C85'],

  skeletonLight: ['#EEEEEE', '#CCCCCC'],
  skeletonDark: ['#2A2A3A', '#1E1E2E'],

  chartBlue: ['#8EC5FF', '#155DFC'],
  chartDeepBlue: ['#155DFC', '#193CB8'],

  surfaceBox: ['rgba(255, 255, 255, 0.76)', 'rgba(255, 255, 255, 0.50)'],
  surfaceBoxDark: [
    'rgba(36, 17, 117, 0.32)',
    'rgba(36, 17, 117, 0.18)',
    'rgba(5, 5, 61, 0.60)',
  ],
};

export const surfaceBoxStops = {
  light: { locations: [0, 1] as [number, number], angle: 135 },
  dark: { locations: [0, 0.5, 1] as [number, number, number], angle: 135 },
};
