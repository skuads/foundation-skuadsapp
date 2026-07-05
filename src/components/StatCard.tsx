import React from 'react';
import { StyleSheet, Text, View } from 'react-native';
import LinearGradient from 'react-native-linear-gradient';
import { colors, fontFamily, fontSize, radii, spacing } from '../theme';

type StatCardProps = {
  label: string;
  value: string;
  gradient?: string[];
};

export function StatCard({ label, value, gradient }: StatCardProps) {
  const hasGradient = Array.isArray(gradient) && gradient.length >= 2;

  if (hasGradient) {
    return (
      <LinearGradient colors={gradient} style={styles.container}>
        <Text
          style={styles.valueOnGradient}
          numberOfLines={1}
          adjustsFontSizeToFit
          minimumFontScale={0.6}
        >
          {value}
        </Text>
        <Text style={styles.labelOnGradient} numberOfLines={1}>
          {label}
        </Text>
      </LinearGradient>
    );
  }

  return (
    <View style={[styles.container, styles.surface]}>
      <Text
        style={styles.value}
        numberOfLines={1}
        adjustsFontSizeToFit
        minimumFontScale={0.6}
      >
        {value}
      </Text>
      <Text style={styles.label} numberOfLines={1}>
        {label}
      </Text>
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    minHeight: 96,
    padding: spacing.lg,
    borderRadius: radii.xl,
    justifyContent: 'flex-start',
    overflow: 'hidden',
  },
  surface: {
    backgroundColor: colors.surface,
    borderWidth: 1,
    borderColor: colors.border,
  },
  value: {
    fontFamily: fontFamily.semibold,
    fontSize: fontSize.display,
    color: colors.textPrimary,
  },
  label: {
    fontFamily: fontFamily.medium,
    fontSize: fontSize.sm,
    color: colors.textSecondary,
    marginTop: 4,
  },
  valueOnGradient: {
    fontFamily: fontFamily.semibold,
    fontSize: fontSize.display,
    color: '#FFFFFF',
    textShadowColor: 'rgba(0, 0, 0, 0.22)',
    textShadowOffset: { width: 0, height: 2 },
    textShadowRadius: 4,
  },
  labelOnGradient: {
    fontFamily: fontFamily.medium,
    fontSize: fontSize.sm,
    color: 'rgba(255, 255, 255, 0.9)',
    marginTop: 4,
  },
});
