# UI Components Documentation

## 🎨 Design System

### Colors

#### Primary Colors
- **Twitter Blue**: `#1DA1F2` - Main brand color
- **Hover Blue**: `#1a8cd8` - Hover state
- **Gradient Start**: `#667eea` - Gradient beginning
- **Gradient End**: `#764ba2` - Gradient end

#### Status Colors
- **Success Green**: `#42b883` / `#10b981`
- **Error Red**: `#f44336` / `#ef4444`
- **Warning Yellow**: `#ffc107`
- **Info Blue**: `#17a2b8`

#### Neutral Colors
- **Background**: `#fff` - Main background
- **Card Background**: `#f8f9fa` - Card/Info background
- **Border**: `#e0e0e0` - Default border
- **Text Primary**: `#333` - Main text
- **Text Secondary**: `#666` - Secondary text
- **Disabled**: `#ccc` - Disabled state

### Typography

- **Heading 1**: 32px, bold, color: `#1DA1F2`
- **Heading 2**: 24px, bold, color: `#333`
- **Body Text**: 16px, color: `#666`
- **Button Text**: 16px, font-weight: 600

### Spacing

- **Container Padding**: 40px
- **Input Padding**: 15px
- **Button Padding**: 12px 24px
- **Gap Between Elements**: 10-20px
- **Border Radius**: 8px (standard), 12px (container)

### Shadows

- **Card Shadow**: `0 4px 6px rgba(0, 0, 0, 0.1)`
- **Button Hover**: Slight elevation effect

## 📱 Components

### 1. Input Field

```html
<input type="text" id="twitter-url-input" 
       placeholder="https://twitter.com/username/status/..." />
```

**Styles:**
- Width: 100%
- Padding: 15px
- Border: 2px solid #e0e0e0
- Border-radius: 8px
- Focus: Border changes to #1DA1F2

### 2. Button Group

**Paste Button:**
- Background: #42b883 (Green)
- Hover: #369870
- Function: Paste from clipboard

**Clear Button:**
- Background: #f44336 (Red)
- Hover: #d32f2f
- Function: Clear input field

**Download Button:**
- Background: #1DA1F2 (Twitter Blue)
- Hover: #1a8cd8
- Flex: 2 (takes more space)
- Function: Download video

### 3. Status Message

**Types:**
- **Success**: Green background (#d4edda), green text (#155724)
- **Error**: Red background (#f8d7da), red text (#721c24)
- **Loading**: Blue background (#d1ecf1), blue text (#0c5460)

### 4. Video Preview

- Centered alignment
- Max-width: 100%
- Border-radius: 8px
- Responsive video element

### 5. Video Result Card

- Background: #f8f9fa
- Padding: 20px
- Border-radius: 8px
- Contains:
  - Video thumbnail
  - Video title
  - Download buttons (multiple qualities)

### 6. Download Buttons

- Primary button: Large, prominent
- Secondary buttons: Smaller, for different qualities
- Hover effects with scale/color changes

## 🔄 Interactions

### Loading States
- Button disabled during API call
- Loading spinner or text
- Status message shows "Đang xử lý..."

### Success States
- Green success message
- Video preview appears
- Download buttons enabled

### Error States
- Red error message
- Clear error description
- Retry option available

## 📐 Layout

### Container
- Max-width: 800px (desktop)
- Centered with margin: auto
- Responsive padding

### Grid System
- Flexbox for button groups
- Responsive wrapping
- Gap-based spacing

## 🎯 Accessibility

- Semantic HTML
- ARIA labels where needed
- Keyboard navigation support
- Focus states visible
- Color contrast compliant

## 🌙 Dark Mode (Future)

Ready for dark mode implementation:
- CSS variables for colors
- Media query support
- Toggle switch ready

