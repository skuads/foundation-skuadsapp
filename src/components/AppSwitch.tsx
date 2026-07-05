import React from 'react';
import { Switch } from 'react-native';
import { colors } from '../theme';

type AppSwitchProps = {
  value: boolean;
  onValueChange?: (value: boolean) => void;
  disabled?: boolean;
};

export function AppSwitch({ value, onValueChange, disabled }: AppSwitchProps) {
  const onColor = colors.primaryDark;
  const offColor = '#94A3B8';

  return (
    <Switch
      value={value}
      onValueChange={onValueChange}
      disabled={disabled}
      thumbColor="#FFFFFF"
      trackColor={{ false: offColor, true: onColor }}
      ios_backgroundColor={offColor}
    />
  );
}
