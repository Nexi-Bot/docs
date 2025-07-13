<?php
$pageTitle = "Setup & Configuration Guide - Nexi Bot Documentation";
$pageDescription = "Complete setup guide for configuring Nexi Bot with step-by-step instructions for all features.";
include 'includes/header.php';
?>

<div class="content-section">
    <div class="container">
        <div class="content-grid">
            <div class="sidebar">
                <h3>Setup Guide</h3>
                <ul>
                    <li><a href="#initial-setup" class="active">Initial Setup</a></li>
                    <li><a href="#core-features">Core Features</a></li>
                    <li><a href="#advanced-config">Advanced Configuration</a></li>
                    <li><a href="#channels-roles">Channels & Roles</a></li>
                    <li><a href="#backup">Backup & Data</a></li>
                </ul>
            </div>
            
            <div class="content-main">
                <h1>🚀 Setup & Configuration Guide</h1>
                <p>Complete guide to setting up and configuring Nexi Bot for your Discord server.</p>

                <div class="alert alert-info">
                    <strong>Quick Start:</strong> Use <code>/setup</code> for an automated configuration wizard, or follow this detailed guide for manual setup.
                </div>

                <h2 id="initial-setup">Initial Bot Setup</h2>

                <div class="setup-section">
                    <h3>1. Adding Nexi Bot to Your Server</h3>
                    <div class="setup-steps">
                        <ol>
                            <li><strong>Get Invite Link:</strong> Use <code>/utility invite</code> or visit our website</li>
                            <li><strong>Select Server:</strong> Choose your Discord server from dropdown</li>
                            <li><strong>Permissions:</strong> Ensure "Administrator" is selected for full functionality</li>
                            <li><strong>Authorize:</strong> Click "Authorize" and complete verification</li>
                            <li><strong>Verify Addition:</strong> Check that Nexi Bot appears in your member list</li>
                        </ol>
                    </div>
                </div>

                <div class="setup-section">
                    <h3>2. Quick Setup Process</h3>
                    <div class="setup-steps">
                        <p><strong>Run Setup Wizard:</strong></p>
                        <code>/setup</code>
                        <p>This configures:</p>
                        <ul>
                            <li>Basic welcome and farewell messages</li>
                            <li>Essential moderation settings</li>
                            <li>Logging channels for server activity</li>
                            <li>Permission verification and fixes</li>
                        </ul>
                    </div>
                </div>

                <div class="setup-section">
                    <h3>3. Main Configuration Access</h3>
                    <div class="setup-steps">
                        <p><strong>Open Configuration Panel:</strong></p>
                        <code>/config</code>
                        <p>The interactive panel allows you to:</p>
                        <ul>
                            <li>Toggle features on/off</li>
                            <li>Set up channels for different functions</li>
                            <li>Configure premium integrations</li>
                            <li>Manage API keys (Premium)</li>
                            <li>Export/import configurations (Premium)</li>
                        </ul>
                    </div>
                </div>

                <h2 id="core-features">Core Feature Setup</h2>

                <div class="setup-section">
                    <h3>Welcome & Farewell System</h3>
                    <div class="setup-steps">
                        <ol>
                            <li><strong>Enable Feature:</strong> <code>/config</code> → Features → "Welcome System"</li>
                            <li><strong>Set Channel:</strong> Select channel for welcome messages</li>
                            <li><strong>Customize Messages:</strong> Edit welcome and farewell text</li>
                            <li><strong>Add Images:</strong> Upload custom welcome images (Premium)</li>
                            <li><strong>Test System:</strong> Have someone join/leave to verify</li>
                        </ol>
                    </div>
                </div>

                <div class="setup-section">
                    <h3>Moderation System</h3>
                    <div class="setup-steps">
                        <ol>
                            <li><strong>Permission Check:</strong> Ensure bot role is above member roles</li>
                            <li><strong>Enable Logging:</strong> Set up moderation log channel</li>
                            <li><strong>Configure Auto-Mod:</strong> Set up automatic rule enforcement</li>
                            <li><strong>Set Mute Role:</strong> Create or assign role for muted members</li>
                            <li><strong>Test Commands:</strong> Try <code>/moderation warn</code> on test user</li>
                        </ol>
                    </div>
                </div>

                <div class="setup-section">
                    <h3>Music System Setup</h3>
                    <div class="setup-steps">
                        <ol>
                            <li><strong>Voice Permissions:</strong> Grant "Connect" and "Speak" in voice channels</li>
                            <li><strong>Music Channel:</strong> Optionally restrict music commands to specific channel</li>
                            <li><strong>Volume Limits:</strong> Set default and maximum volume levels</li>
                            <li><strong>Queue Settings:</strong> Configure maximum queue length</li>
                            <li><strong>Test Playback:</strong> Join voice channel and try <code>/music play</code></li>
                        </ol>
                    </div>
                </div>

                <div class="setup-section">
                    <h3>Server Statistics</h3>
                    <div class="setup-steps">
                        <ol>
                            <li><strong>Enable Feature:</strong> Turn on in <code>/config</code> → Features</li>
                            <li><strong>Configure Counters:</strong> Set up member count, online count displays</li>
                            <li><strong>Position Channels:</strong> Arrange stat channels at top of server</li>
                            <li><strong>Update Frequency:</strong> Choose how often stats refresh</li>
                            <li><strong>Custom Stats:</strong> Add custom counters (Premium)</li>
                        </ol>
                    </div>
                </div>

                <h2 id="advanced-config">Advanced Configuration</h2>

                <div class="setup-section">
                    <h3>Premium Integrations</h3>
                    
                    <h4>Google Calendar Setup:</h4>
                    <div class="setup-steps">
                        <ol>
                            <li><strong>Create Google Cloud Project:</strong> Visit Google Cloud Console</li>
                            <li><strong>Enable Calendar API:</strong> Activate Google Calendar API</li>
                            <li><strong>Create Credentials:</strong> Generate service account key</li>
                            <li><strong>Add to Bot:</strong> Paste credentials in <code>/config</code> → API Keys</li>
                            <li><strong>Test Integration:</strong> Create test event to verify connection</li>
                        </ol>
                    </div>

                    <h4>Roblox Integration:</h4>
                    <div class="setup-steps">
                        <ol>
                            <li><strong>Get Roblox API Key:</strong> From Roblox Cloud Console</li>
                            <li><strong>Configure Groups:</strong> Set up group management permissions</li>
                            <li><strong>Add Credentials:</strong> Enter API details in bot configuration</li>
                            <li><strong>Test Verification:</strong> Use <code>/roblox</code> to verify account linking</li>
                            <li><strong>Set Up Roles:</strong> Map Roblox ranks to Discord roles</li>
                        </ol>
                    </div>

                    <h4>ERLC Integration:</h4>
                    <div class="setup-steps">
                        <ol>
                            <li><strong>Obtain ERLC API Access:</strong> Contact ERLC administrators</li>
                            <li><strong>Configure Server Details:</strong> Set up server connection info</li>
                            <li><strong>Test Commands:</strong> Verify <code>/erlc</code> commands work correctly</li>
                            <li><strong>Set Permissions:</strong> Configure who can use ERLC features</li>
                            <li><strong>Monitor Activity:</strong> Set up logging for ERLC actions</li>
                        </ol>
                    </div>
                </div>

                <div class="setup-section">
                    <h3>Analytics Configuration (Premium)</h3>
                    <div class="setup-steps">
                        <ol>
                            <li><strong>Enable Analytics:</strong> Turn on in premium features</li>
                            <li><strong>Data Collection:</strong> Choose what metrics to track</li>
                            <li><strong>Report Frequency:</strong> Set up automated report generation</li>
                            <li><strong>Export Settings:</strong> Configure data export formats</li>
                            <li><strong>Privacy Settings:</strong> Set data retention and sharing preferences</li>
                        </ol>
                    </div>
                </div>

                <h2 id="channels-roles">Channel and Role Configuration</h2>

                <div class="setup-section">
                    <h3>Essential Channels</h3>
                    <div class="channel-list">
                        <ul>
                            <li><strong>Welcome Channel:</strong> Member join/leave messages</li>
                            <li><strong>Moderation Logs:</strong> Automated moderation actions</li>
                            <li><strong>General Logs:</strong> Server activity tracking</li>
                            <li><strong>Bot Commands:</strong> Dedicated channel for bot usage</li>
                            <li><strong>Appeals Channel:</strong> Ban appeal submissions (Premium)</li>
                        </ul>
                    </div>
                </div>

                <div class="setup-section">
                    <h3>Important Roles</h3>
                    <div class="role-list">
                        <ul>
                            <li><strong>Muted Role:</strong> For temporary member restrictions</li>
                            <li><strong>Auto Roles:</strong> Automatically assigned to new members</li>
                            <li><strong>Level Roles:</strong> Rewards for active members</li>
                            <li><strong>Premium Roles:</strong> Special access for premium features</li>
                            <li><strong>Staff Roles:</strong> Moderation and administration access</li>
                        </ul>
                    </div>
                </div>

                <div class="setup-section">
                    <h3>Permission Configuration</h3>
                    <div class="permission-info">
                        <h4>Recommended Bot Permissions:</h4>
                        <ul>
                            <li><strong>Administrator</strong> (simplest, full functionality)</li>
                            <li><strong>OR specific permissions:</strong>
                                <ul>
                                    <li>Manage Server, Manage Roles, Manage Channels</li>
                                    <li>Moderate Members, Manage Messages</li>
                                    <li>Read/Send Messages, Embed Links, Attach Files</li>
                                    <li>Connect/Speak (for music), Use Voice Activity</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <h2 id="backup">Backup and Data Management</h2>

                <div class="setup-section">
                    <h3>Configuration Backup (Premium)</h3>
                    <div class="setup-steps">
                        <ol>
                            <li><strong>Export Config:</strong> Use <code>/config</code> → "Export Configuration"</li>
                            <li><strong>Save File:</strong> Download and store backup file securely</li>
                            <li><strong>Document Changes:</strong> Keep notes on customizations</li>
                            <li><strong>Test Restore:</strong> Verify backup can be imported correctly</li>
                            <li><strong>Schedule Backups:</strong> Set up regular backup reminders</li>
                        </ol>
                    </div>
                </div>

                <div class="setup-section">
                    <h3>Server Migration</h3>
                    <div class="setup-steps">
                        <ol>
                            <li><strong>Export Configuration:</strong> Create backup from original server</li>
                            <li><strong>Invite Bot:</strong> Add Nexi Bot to new server with full permissions</li>
                            <li><strong>Import Settings:</strong> Upload configuration backup</li>
                            <li><strong>Verify Setup:</strong> Check all features transferred correctly</li>
                            <li><strong>Update Integrations:</strong> Reconfigure external API connections</li>
                        </ol>
                    </div>
                </div>

                <div class="alert alert-success">
                    <strong>Setup Complete!</strong> Your bot should now be fully configured. Use <code>/config</code> anytime to adjust settings or add new features.
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
